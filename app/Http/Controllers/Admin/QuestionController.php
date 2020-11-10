<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modals\Question;
use Validator;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        $questions = Question::filter($request)->get();

        return response()->json(['success' => true, 'data' => $questions], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'test_id' => [
                'required',
            ],
            'lang' => [
                'required',
            ],
            'order' => [
                'required',
            ],
            'question' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $question = question::create($request->all());

        return response()->json(['success' => true, 'data' => 'Question created'], 201);
    }

    public function show($id)
    {
        $question = Question::find($id);

        if ($question) {

            return response()->json(['success' => true, 'data' => $question], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Question not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'test_id' => [
                'required',
            ],
            'lang' => [
                'required',
            ],
            'order' => [
                'required',
            ],
            'question' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $question = Question::find($id);

        if ($question) {

            $question->update($request->all());

            return response()->json(['success' => true, 'data' => 'Question updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Question not found'], 404);
    }

    public function destroy($id)
    {
        $question = Question::find($id);

        if ($question) {

            $question->delete();

            return response()->json(['success' => true, 'data' => 'Question destroyed'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Question not found'], 404);
    }
}
