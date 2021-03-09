<?php

namespace App\Http\Controllers\Secretary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grade;
use Validator;

class GradeController extends Controller
{
    public function index(Request $request)
    {
        $grades = Grade::filter($request)->get();

        return response()->json(['success' => true, 'data' => $grades], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => [
                'required',
            ],
            'grade' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $grade = Grade::create($request->all());

        return response()->json(['success' => true, 'data' => 'Grade created'], 201);
    }

    public function show($id)
    {
        $grade = Grade::find($id);

        if ($grade) {

            return response()->json(['success' => true, 'data' => $grade], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Grade not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => [
                'required',
            ],
            'grade' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $grade = Grade::find($id);

        if ($grade) {

            $grade->update($request->all());

            return response()->json(['success' => true, 'data' => 'Grade updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Grade not found'], 404);
    }

    public function destroy($id)
    {
        $grade = Grade::find($id);

        if ($grade) {

            $grade->delete();

            return response()->json(['success' => true, 'data' => 'Grade destroyed'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Grade not found'], 404);
    }
}
