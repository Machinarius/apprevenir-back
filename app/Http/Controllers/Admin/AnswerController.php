<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Answer;
use Validator;

class AnswerController extends Controller
{
    public function index(Request $request)
    {
        $answers = Answer::filter($request)->get();

        return response()->json(['success' => true, 'data' => $answers], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question_id' => [
                'required',
            ],
            'lang' => [
                'required',
            ],
            'value' => [
                'required',
            ],
            'answer' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $answer = Answer::create($request->all());

        return response()->json(['success' => true, 'data' => 'Answer created'], 201);
    }

    public function show($id)
    {
        $answer = Answer::find($id);

        if ($answer) {

            return response()->json(['success' => true, 'data' => $answer], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Answer not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'question_id' => [
                'required',
            ],
            'lang' => [
                'required',
            ],
            'value' => [
                'required',
            ],
            'answer' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $answer = Answer::find($id);

        if ($answer) {

            $answer->update($request->all());

            return response()->json(['success' => true, 'data' => 'Answer updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Answer not found'], 404);
    }

    public function destroy($id)
    {
        $answer = Answer::find($id);

        if ($answer) {

            $answer->delete();

            return response()->json(['success' => true, 'data' => 'Answer destroyed'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Answer not found'], 404);
    }
}
