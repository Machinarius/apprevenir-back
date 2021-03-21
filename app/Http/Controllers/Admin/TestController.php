<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Test;
use App\Models\EnabledTest;
use App\Models\Answer;
use App\Models\TestInformation;
use Validator;
use Auth;
use Storage;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $tests = Test::filter($request)->with(['categories', 'addictions' => function ($addictions) {
            $addictions->select('name')->distinct();
        }])->get();

        return response()->json(['success' => true, 'data' => $tests], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lang' => [
                'required',
            ],
            'name' => [
                'required',
            ],
            'image' => [
                'required',
            ],
            'introduction' => [
                'required',
            ],
            'description' => [
                'required',
            ],
            'status' => [
                'required',
            ],
            'informations' => [
                'required'
            ],
            // 'information_level_id' => [
            //     'required',
            // ],
            // 'difficulty_level_id' => [
            //     'required',
            // ],
            // 'url_video' => [
            //     'required',
            // ],
            // 'professional_help' => [
            //     'required',
            // ],
            // 'url_interest' => [
            //     'required',
            // ],
            // 'min' => [
            //     'required',
            // ],
            // 'max' => [
            //     'required',
            // ],
            'addictions' => [
                'required',
            ],
            'categories' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $test = Test::create($request->all());

        if ($test) {

            $test->testInformation()->createMany($informations);
            
            $test->addictions()->sync($request['addictions']);

            $test->categories()->sync($request['categories']);
        }

        return response()->json(['success' => true, 'data' => 'Test created'], 201);
    }

    public function show($id)
    {
        $test = Test::where('id', $id)->with(['questions' => function($query) {
                    $query->with(['answers']);
                }, 'addictions' => function ($addictions) {
                    $addictions->distinct();
                }])->first();

        if ($test) {

            return response()->json(['success' => true, 'data' => $test], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Test not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'lang' => [
                'required',
            ],
            'name' => [
                'required',
            ],
            'image' => [
                'required',
            ],
            'introduction' => [
                'required',
            ],
            'description' => [
                'required',
            ],
            'status' => [
                'required',
            ],
            'informations' => [
                'required'
            ],
            // 'information_level_id' => [
            //     'required',
            // ],
            // 'difficulty_level_id' => [
            //     'required',
            // ],
            // 'url_video' => [
            //     'required',
            // ],
            // 'professional_help' => [
            //     'required',
            // ],
            // 'url_interest' => [
            //     'required',
            // ],
            // 'min' => [
            //     'required',
            // ],
            // 'max' => [
            //     'required',
            // ],
            'addictions' => [
                'required',
            ],
            'categories' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $test = Test::find($id);

        if ($test) {

            $test->update($request->all());

            foreach ($request['informations'] as $key => $information) {

                $infoUpdate = TestInformation::find($key);

                $infoUpdate->update($information);
            }

            $test->addictions()->sync($request['addictions']);

            $test->categories()->sync($request['categories']);

            return response()->json(['success' => true, 'data' => 'Test updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Test not found'], 404);
    }

    public function destroy($id)
    {
        $test = Test::find($id);

        if ($test) {

            $test->delete();

            return response()->json(['success' => true, 'data' => 'Test destroyed'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Test not found'], 404);
    }

    public function result(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'answers' => [
                'required',
            ],
            'test_id' => [
                'required',
            ],
            'addiction_id' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $test = Test::find($request['test_id']);

        if ($test) {

            $score = 0;

            foreach ($request['answers'] as $key => $answer) {

                $answers[] = [
                    'user_id' => Auth::user()->id,
                    'test_id' => $request['test_id'],
                    'answer_id' =>  $answer
                ]; 

                $score += Answer::find($answer)->value;
            }

            $test->answers()->createMany($answers);

            $filter = [
                ['min', '>=', $score],
                ['max', '<=', $score]
            ];

            $testInfo = TestInformation::where($filter)->first();

            $test->result()->create([
                'user_id' => Auth::user()->id,
                'addiction_id' => $request['addiction_id'],
                'information_level_id' => $testInfo->information_level_id,
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => Carbon::now()->format('H:i:s'),
                'total' => $score
            ]);
        } else {

            return response()->json(['success' => false, 'errors' => 'Test not found'], 404);
        }
    }

    public function image($filename)
    {
        $image = Storage::disk('public')->get('images/'.$filename);

        return $image;
    }

    public function store_client_enabled_tests(Request $request, $id) {
        $userIsAdmin = Auth::user() !== null && (
            Auth::user()->hasRole('root') || Auth::user()->hasRole('admin')
        );

        // TODO: Use the permissions system correctly
        if (!$userIsAdmin) {
            return response()->json(['success' => false, 'errors' => 'Not authorized'], 401);
        }

        $validator = Validator::make($request->all(), [
            'test_ids' => [
                'required',
            ]
        ]);

        if ($validator->fails()) {
        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $testIds = array_filter($request["test_ids"], function ($test) {
            return gettype($test) == "integer";
        });

        $currentEnabledTests = EnabledTest::where('user_id', '=', $id);
        DB::transaction(function() use (&$currentEnabledTests, &$testIds, &$id) {
            foreach ($currentEnabledTests as $test) {
                $test->delete();
            }

            foreach ($testIds as $testId) {
                $testObject = EnabledTest::create([
                    'user_id' => $id,
                    'test_id' => $testId
                ]);
                $testObject->save();
            }
        });

        return response()->json(['success' => true, 'data' => 'Updated enabled tests'], 200);
    }

    public function get_client_enabled_tests(Request $request, $id) {
        $userIsAdmin = Auth::user() !== null && (
            Auth::user()->hasRole('root') || Auth::user()->hasRole('admin')
        );

        // TODO: Use the permissions system correctly
        if (!$userIsAdmin) {
            return response()->json(['success' => false, 'errors' => 'Not authorized'], 401);
        }

        $enabledTests = EnabledTest::where('user_id', '=', $id)->get();
        $testIds = $enabledTests->map(function ($test) { return $test["test_id"]; });
        // $testIds = array_map(function ($test) {
        //     return $test["user_id"];
        // }, $enabledTests);

        return response()->json(['success' => false, 'data' => $testIds], 200);
    }
}
