<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Answer;
use App\Models\TestInformation;
use App\Models\Result;
use App\Models\Commune;
use Carbon\Carbon;
use App\Notifications\UserRegister;
use Validator;
use Auth;
use Illuminate\Support\Facades\Log;
use Hash;
use App\Exports\UserExport;
use App\Exports\UserSystemExport;
use App\Exports\ResultExport;
use App\Exports\ClientExport;
use Storage;
use File;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->hasRole('root') || Auth::user()->hasRole('admin')) {

            $users = User::filter($request)->with(['profile'])->get()->map(function ($user) use ($request) {

                if (!isset($request['system']) && !$user->hasRole('admin') && !$user->hasRole('root')) {

                    return $user;
                } else if (isset($request['system']) && $user->id != 1 && ($user->hasRole('admin') || $user->hasRole('root'))) {

                    if ($user->hasRole('admin')) {

                        $user->system = 'Administrador';
                    } else {

                        $user->system = 'Super Administrador';
                    }

                    return $user;
                }
            });

            $users = array_values($users->reject(null)->toArray());

        } else {

            $users = User::where('reference', Auth::user()->id)->with(['profile'])->filter($request)->get();
        }

        return response()->json(['success' => true, 'data' => $users], 200);
    }

    function resolveUserClientConfig(User $user) {
        switch ($user['client']) {
            case 'entidades territoriales':
                $allCommunes = function ($user) { return Commune::where('user_id', $user['id'])->with(['neighborhoods']); };
                $user->clientTypeConfig = [
                    'communes' => [
                        'urbana' => $allCommunes($user)->where('zone_type', 'urbana')->get(),
                        'rural' => $allCommunes($user)->where('zone_type', 'rural')->get()
                    ],
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
        }

        $user = $this->formarUser($user);

        return $user;
    }

    public function clients(Request $request)
    {
        $clients = User::with(['profile'])->where('client', '!=', 'persona natural');

        if (isset($request["client"])) {
            $clients = $clients->where('client', $request['client']);
        }

        $clients = $clients->get()->map(function ($user) {
            $user->profile->last_names = '';
            $user->profile->last_names_two = '';
            return $this->resolveUserClientConfig($user);
        });
        
        return response()->json(['success' => true, 'data' => $clients], 200);
    }

    public function store(Request $request)
    {
        $userIsAdmin = Auth::user() !== null && (
            Auth::user()->hasRole('root') || Auth::user()->hasRole('admin')
        );
        
        $validations = [
            'email' => [
                'required', 'unique:users'
            ],
            'first_names' => [
                'required'
            ]
        ];

        if ($request["client"] === "persona natural") {
            $validations['last_names'] = ['required'];
            $validations['last_names_two'] = ['required'];
        }

        $validations['password'] = ['required', 'min:8', 'max:30'];
        $validations['password_confirmation'] = ['required', 'same:password'];

        $validator = Validator::make($request->all(), $validations);
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

            if ($userIsAdmin) {

                if ($request["client"] !== "persona natural") {

                    $user->assignRole('client');

                } else if (isset($request["system"])) {

                    if (isset($request["userProfile"])) {

                        if ($request["userProfile"] == 'Super Administrador') {

                            $role = 'root';
                        } else {

                            $role = 'admin';
                        }

                        $user->assignRole($role);
                    }
                }
            }
            
            $user->notify(new UserRegister($user->email, $user->profile->first_names));
        }

        return response()->json(['success' => true, 'data' => $user], 201);
    }

    public function storeUserSystem(Request $request)
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

        $user = User::create($request->all());

        if ($user) {

            if (isset($request["userProfile"])) {

                if ($request["userProfile"] == 'Super Administrador') {

                    $role = 'root';
                } else {

                    $role = 'admin';
                }

                $user->assignRole($role);
            }

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

        if (isset($user)) {

            if ($user->hasRole('admin')) {

                $user->system = 'Administrador';
            } else {

                $user->system = 'Super Administrador';
            }

            $user = $this->resolveUserClientConfig($user);
            
            return response()->json(['success' => true, 'data' => $user], 200);
        }

        return response()->json(['success' => false, 'errors' => 'User not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $validations = [
            'first_names' => [
                'required'
            ]
        ];

        if ($request["client"] === "persona natural" || (
            !Auth::user()->hasRole('root') && !Auth::user()->hasRole('admin')
        )) {
            $validations['last_names'] = ['required'];
            $validations['last_names_two'] = ['required'];
        }

        $validator = Validator::make($request->all(), $validations);
        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        if (Auth::user()->id != $id) {

            if (Auth::user()->hasPermissionTo('users.update')) {

                $user = User::find($id);
                
                if (isset($request["userProfile"])) {
                    
                    if ($request["userProfile"] == 'Super Administrador') {

                        $role = 'root';
                    } else {

                        $role = 'admin';
                    }

                    $user->syncRoles(['']);
                    
                    $user->assignRole($role);
                }
                
                if ($user->id == 1 ) {

                    return response()->json(['success' => false, 'errors' => 'Forbidden'], 403);
                }
            } else {
                
                return response()->json(['success' => false, 'errors' => 'Forbidden'], 403);
            }
        } else {

            $user = User::find(Auth::user()->id);
        }
        
        if ($user) {
            if ($request["password_update_requested"] == true) {
                if ($request["password"] !== $request["password_confirmation"] ||
                    !Hash::check($request["current_password"], $user["password"])
                ) {
                    return response()->json(['success' => false, 'errors' => 'La contraseña que ingresaste no coincide con la contraseña actual'], 401);
                }
            } else {
                unset($request["password"]);
                unset($request["password_confirmation"]);
            }

            unset($request['code']);

            unset($request['email']);

            $user->update($request->all());

            $user->profile->update($request->all());

            return response()->json(['success' => true, 'data' => $user], 200);
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

        if ($request['test_array']) {

            foreach ($request['answers'] as $key => $answer) {

                $testResult[] =  $this->storeAnswers($request['test_id'], $answer['answers'], $answer['addiction']);
            }
        } else {
            
            $testResult[] = $this->storeAnswers($request['test_id'], $request['answers'], $request['addiction_id']);
        }

        return response()->json(['success' => true, 'data' => $testResult], 200);
    } 

    public function UserResults($id) 
    {
        if (Auth::user()->id == $id || Auth::user()->hasPermissionTo('users.results')) {

            $results = Result::where('user_id', $id)->with(['answers' => function ($answer) {
                $answer->with(['question']);
            }, 'addiction'])->get();
        } else {

            return response()->json(['success' => false, 'data' => 'user not fount'], 404);
        }

        $results = $results->map(function ($result) {

            $result->testName = $result->test->name;

            $result->resultLevel = $result->informationLevel->name;

            $result->date = $result->created_at->format('d/m/y');

            return $result;  
        });

        return response()->json(['success' => true, 'data' => $results], 200);
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

            $result->city = isset($result->user->profile->city) ? $result->user->profile->city->name : '';

            $clientConfig = json_decode($result->user->profile->client_config, true);

            $result->zone = [
                'casco' => '',
                'option_a' => '',
                'option_b' => '',
            ];

            $result->university = [
                'university' => '',
                'programs' => '',
                'modalities' => '',
                'semesters' => ''
            ];

            if (isset($clientConfig['client'])) {

                if ($clientConfig['client_type'] == 'entidades territoriales') {
                    $commune = Commune::where('user_id', $clientConfig['client'])->where('zone_type', $clientConfig['selectA'])
                                ->where('id', $clientConfig['selectB'])
                                ->with(['neighborhoods' => function ($neighborhoods) use ($clientConfig) {
                                    $neighborhoods->where('id', $clientConfig['selectC'])->first();
                                }])
                                ->first();
                    $result->zone = [
                        'casco' => $clientConfig['selectA'],
                        'option_a' => $commune['commune'],
                        'option_b' => $commune['neighborhoods'][0]->neighborhood,
                    ];
                } else if ($clientConfig['client_type'] == 'universidades') {

                    $client = User::where('id', $clientConfig['client'])->with(['profile'])->first();

                    $result->university = [
                        'university' => $client->profile->first_names,
                        'program' => $client->programs->where('id', $clientConfig['selectA'])->first()->program,
                        'modality' => $client->modalities->where('id', $clientConfig['selectB'])->first()->modality,
                        'semester' => $client->semesters->where('id', $clientConfig['selectC'])->first()->semester
                    ];
                }
            }

            return $result;  
        });

        return response()->json(['success' => true, 'data' => $resutls], 200); 
    }

    public function userExport(Request $request) 
    {
        $userIsAdmin = Auth::user() !== null && (
            Auth::user()->hasRole('root') || Auth::user()->hasRole('admin')
        );

        if (!$userIsAdmin) {
            return response()->json(['success' => false, 'data' => "Not authorized"], 401);
        }

        $request['client'] = 'persona natural';

        $users = User::filter($request)->with(['profile'])->where('id', '!=', 1)->get();
        
        $name =  uniqid(Str::random(6));

        \Excel::store(new UserExport($users), $name.'.'.$request['extend']);

        return response()->file(storage_path().'/app/'.$name.'.'.$request['extend']);
    }

    public function userSystemExport(Request $request) 
    {
        $userIsAdmin = Auth::user() !== null && (
            Auth::user()->hasRole('root') || Auth::user()->hasRole('admin')
        );

        if (!$userIsAdmin) {
            return response()->json(['success' => false, 'data' => "Not authorized"], 401);
        }

        $users = User::filter($request)->with(['profile'])->whereHas('roles', function($role) {
            $role->where('name', 'admin');
        })->get();

        $name =  uniqid(Str::random(6));

        \Excel::store(new UserSystemExport($users), $name.'.'.$request['extend']);

        return response()->file(storage_path().'/app/'.$name.'.'.$request['extend']);
    }

    public function clientExport(Request $request) 
    {
        $userIsAdmin = Auth::user() !== null && (
            Auth::user()->hasRole('root') || Auth::user()->hasRole('admin')
        );

        if (!$userIsAdmin) {
            return response()->json(['success' => false, 'data' => "Not authorized"], 401);
        }

        $clients = User::with(['profile'])->where('client', '!=', 'persona natural')->get();

        $name =  uniqid(Str::random(6));

        \Excel::store(new ClientExport($clients), $name.'.'.$request['extend']);

        return response()->file(storage_path().'/app/'.$name.'.'.$request['extend']);
    }

    public function resultExport(Request $request) 
    {
        $userIsAdmin = Auth::user() !== null && (
            Auth::user()->hasRole('root') || Auth::user()->hasRole('admin')
        );

        if (!$userIsAdmin) {
            return response()->json(['success' => false, 'data' => "Not authorized"], 401);
        }
        
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

        $name =  uniqid(Str::random(6));

        \Excel::store(new ResultExport($resutls), $name.'.'.$request['extend']);

        return response()->file(storage_path().'/app/'.$name.'.'.$request['extend']);
    }

    public function updateImageClient(Request $request, $id)
    {
        $user = User::where('id', $id)->with(['profile'])->first();
        if (!$user) {
            return response()->json(['success' => false, 'errors' => 'User not found'], 404);
        }
        
        if (isset($request['image'])) {

            $image = $request->file('image');

            $extension = $image->getClientOriginalExtension();
    
            // $name = $image->getClientOriginalName();

            $name =  uniqid(Str::random(6));
    
            Storage::disk('public')->put('/images/'.$name.'.'.$extension, File::get($image));

            // $url = storage_path().'/app/public/logos/'.$name.'.'.$extension;

            $user->profile->update([
                'image' => $name.'.'.$extension
            ]);

            return response()->json(['success' => true, 'data' => [
                'generated_filename' => $name.".".$extension
            ]], 200); 
        }

        return response()->json(['success' => false, 'errors' => 'Image was not provided'], 401);
    }

    public function getImageClient($id)
    {
        if (Auth::user()->hasRole('root') || Auth::user()->hasRole('admin') || Auth::user()->id == $id) {

            $user = User::where('id', $id)->with(['profile'])->first();

            if ($user) {
               
                $url = asset('storage/images/'.$user->profile->image);

                return response()->json(['success' => true, 'data' => $url], 200);
            }
        }

        return response()->json(['success' => false, 'errors' => 'User not found'], 404);
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

        if (isset($user["profile"]["client_config"])) {
            $user["profile"]["client_config"] = json_decode($user["profile"]["client_config"]);
        }

        return $user;
    }

    private function storeAnswers($test_id, $answers, $addiction) 
    {
        $answers = Answer::whereIn('id', $answers)->get();

        $points = 0;
        
        if ($answers) {

            foreach ($answers as $key => $answer) {
                
                $points += $answer->value;
            }
            
            $attrInfo = [
                ['test_id', '=', $test_id],
                ['min', '<=', $points],
                ['max', '>=', $points]
            ];
            
            $testInfo = TestInformation::where($attrInfo)->first();

            $testInfo->resultLevel = $testInfo->informationLevel->name;

            $addiction = $addiction != NULL ? $addiction : NULL;

            $result = Result::create([
                'user_id' => Auth::user()->id,
                'test_id' => $test_id,
                'information_level_id' => $testInfo->information_level_id,
                'addiction_id' => $addiction,
                'date' => Carbon::today()->format('Y-m-d'),
                'time' => Carbon::today()->format('h:m:s'),
                'total' => $points
            ]);

            $testInfo->addiction = isset($addiction) ? $result->addiction->name : NULL;

            foreach ($answers as $key => $answer) {

                Auth::user()->answers()->attach($answer->id, ['test_id' => $test_id, 'result_id' => $result->id]);
            }

            return $testInfo;
        }

        return false;
    }
}
