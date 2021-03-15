<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Answer;
use App\Models\TestInformation;
use App\Models\Result;
use Carbon\Carbon;
use Validator;
use Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->hasRole('root') || Auth::user()->hasRole('admin')) {

            $users = User::filter($request)->with(['profile'])->get()->map(function ($user) {

                if (!$user->hasRole('admin') && !$user->hasRole('root')) {

                    return $user;
                }
            });

            $users = array_values($users->reject(null)->toArray());

        } else {

            $users = User::where('reference', Auth::user()->id)->with(['profile'])->filter($request)->get();
        }

        return response()->json(['success' => true, 'data' => $users], 200);
    }

    public function clients(Request $request)
    {
        $clients = User::where('client', $request['client'])->with(['profile'])->get()->map(function($user) {

            switch ($user['client']) {
                case 'entidades territoriales':
                    $user->clientTypeConfig = [
                        'zones' => $user->zones,
                        'communes' => $user->communes,
                        'neighborhoods' => $user->neighborhoods
                    ];
                    break;
                case 'secretarias de educacion':
                    $user->clientTypeConfig = [
                        'educationalInstitutions' => $user->educationalInstitutions,
                        'grades' => $user->grades
                    ];
                    break;
                case 'instituciones educativas':
                    $user->clientTypeConfig = [
                        'educationalGrades' => $user->educationalGrades
                    ];
                    break;
                case 'universidades':
                    $user->clientTypeConfig = [
                        'programs' => $user->programs,
                        'modalities' => $user->modalities,
                        'semesters' => $user->semesters
                    ];
                    break;
                case 'empresas':
                    $user->clientTypeConfig = [
                        'locations' => $user->locations,
                        'areas' => $user->areas,
                        'schedules' => $user->schedules,
                    ];
                    break;
                default:
                    $user;
                    break;
            }

            $user = $this->formarUser($user);

            return $user;
        });
        
        
        
        return response()->json(['success' => true, 'data' => $clients], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => [
                'required', 'unique:users'
            ],
            'first_names' => [
                'required'
            ],
            'last_names' => [
                'required'
            ],
            'last_names_two' => [
                'required'
            ],
            'password' => [
                'required', 'min:8', 'max:30'
            ],
            'password_confirmation' => [
                'required', 'same:password',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        $request['code'] = uniqid(Str::random(8));

        if (isset($request['client_config'])) {
            
            $request['client_config'] = json_encode($request['client_config']);
        }

        $user = User::create($request->all());

        if ($user) {

            $user->profile()->create($request->all());
        }

        return response()->json(['success' => true, 'data' => 'User created'], 201);
    }

    public function show($id)
    {
        if (Auth::user()->id != $id) {

            if (Auth::user()->hasPermissionTo('users.show')) {

                if (Auth::user()->hasRole('root') || Auth::user()->hasRole('admin')) {

                    $user = User::where('id', $id)->with(['profile'])->first();
                } else {

                    $user = User::where(['id' => $id, 'reference' => Auth::user()->id])->with(['profile'])->first();
                }
            }
        } else {

            $user = User::where('id', $id)->with(['profile'])->first();
        }

        if ($user) {

            return response()->json(['success' => true, 'data' => $user], 200);
        }

        return response()->json(['success' => false, 'errors' => 'User not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'first_names' => [
                'required'
            ],
            'last_names' => [
                'required'
            ],
            'last_names_two' => [
                'required'
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        if (Auth::user()->id != $id) {

            if (Auth::user()->hasPermissionTo('users.update')) {

                $user = User::find($id);

                if ($user->hasRole('root')) {

                    return response()->json(['success' => false, 'errors' => 'Forbidden'], 403);
                }
            } else {
                
                return response()->json(['success' => false, 'errors' => 'Forbidden'], 403);
            }
        } else {

            $user = User::find(Auth::user()->id);
        }
        
        if ($user) {

            unset($request['code']);

            unset($request['email']);

            unset($request['status']);

            if (isset($request['password']) &&  $request['password'] == '') {

                unset($request['password']);
            }

            $user->update($request->all());

            $user->profile->update($request->all());

            return response()->json(['success' => true, 'data' => 'User updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'User not found'], 404);
    }

    public function status(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'status' => [
                'required'
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        $user = User::find($id);

        if ($user->hasRole('root')) {

            return response()->json(['success' => false, 'errors' => 'Forbidden'], 403);
        }

        $user->update([
            'status' => $request['status']
        ]);

        $msg = $request['status'] == 0 ? 'user disabled' : 'user enabled';

        return response()->json(['success' => false, 'data' => $msg], 200);
    }

    public function destroy($id)
    {
        if (Auth::user()->id != $id) {

            $user = User::find($id);
        
            if ($user && !$user->hasRole('root')) {

                $user->delete();

                return response()->json(['success' => true, 'data' => 'User destroyed'], 200);
            }
        }
        
        return response()->json(['success' => false, 'errors' => 'User not found'], 404);
    }

    public function answer(Request $request)
    { 
        $validator = Validator::make($request->all(), [
            'answers' => [
                'required'
            ],
            'test_id' => [
                'required'
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }
       
        $answers = Answer::whereIn('id', $request['answers'])->get();

        $points = 0;
        
        if ($answers) {

            foreach ($answers as $key => $answer) {
                
                $points += $answer->value;
            }
            
            $attrInfo = [
                ['test_id', '=', $request['test_id']],
                ['min', '<=', $points],
                ['max', '>=', $points]
            ];
            
            $testInfo = TestInformation::where($attrInfo)->first();

            $testInfo->resultLevel = $testInfo->informationLevel->name;

            $addiction = $request['addiction_id'] != NULL ? $request['addiction_id'] : NULL;

            $result = Result::create([
                'user_id' => Auth::user()->id,
                'test_id' => $request['test_id'],
                'information_level_id' => $testInfo->information_level_id,
                'addiction_id' => $addiction,
                'date' => Carbon::today()->format('Y-m-d'),
                'time' => Carbon::today()->format('h:m:s'),
                'total' => $points
            ]);

            foreach ($answers as $key => $answer) {

                Auth::user()->answers()->attach($answer->id, ['test_id' => $request['test_id'], 'result_id' => $result->id]);
            }

            return response()->json(['success' => true, 'data' => $testInfo], 200);
        }

        return response()->json(['success' => false, 'data' => 'error answers'], 404);
    } 

    public function UserResults($id) 
    {
        if (Auth::user()->id == $id || Auth::user()->hasPermissionTo('users.results')) {

            $resutls = Result::where('user_id', $id)->with(['answers' => function ($answer) {
                $answer->with(['question']);
            }, 'addiction'])->get();
        } else {

            return response()->json(['success' => false, 'data' => 'user not fount'], 404);
        }

        $resutls = $resutls->map(function ($result) {

            $result->testName = $result->test->name;

            $result->resultLevel = $result->informationLevel->name;

            $result->date = $result->created_at->format('d/m/y');

            return $result;  
        });

        return response()->json(['success' => true, 'data' => $resutls], 200);
    }

    public function getAllUsersResults()
    {
        $resutls = Result::whereNotNull('id')->with(['user.profile', 'answers' => function ($answer) {
            $answer->with(['question']);
        }, 'addiction'])->get();

        $resutls = $resutls->map(function ($result) {

            $result->testName = $result->test->name;

            $result->resultLevel = $result->informationLevel->name;

            $result->date = $result->created_at->format('d/m/y');

            $result->user->profile->city;

            return $result;  
        });

        return response()->json(['success' => true, 'data' => $resutls], 200); 
    }

    private function formarUser($user) 
    {
        $attrRemoves = [
            'zones',
            'communes',
            'neighborhoods',
            'educationalInstitutions',
            'grades',
            'educationalGrades',
            'programs',
            'modalities',
            'semesters',
            'locations',
            'areas',
            'schedules',
        ];

        foreach ($attrRemoves as $remove) {

            unset($user[$remove]);
        }

        return $user;
    }
}
