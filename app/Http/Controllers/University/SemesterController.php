<?php

namespace App\Http\Controllers\University;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Semester;
use Validator;

class SemesterController extends Controller
{
    public function index(Request $request)
    {
        $semesters = Semester::filter($request)->get();

        return response()->json(['success' => true, 'data' => $semesters], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'modality_id' => [
                'required',
            ],
            'semester' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $semester = Semester::create($request->all());

        return response()->json(['success' => true, 'data' => 'Semester created'], 201);
    }

    public function show($id)
    {
        $semester = Semester::find($id);

        if ($semester) {

            return response()->json(['success' => true, 'data' => $semester], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Semester not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'modality_id' => [
                'required',
            ],
            'semester' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $semester = Semester::find($id);

        if ($semester) {

            $semester->update($request->all());

            return response()->json(['success' => true, 'data' => 'Semester updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Semester not found'], 404);
    }

    public function destroy($id)
    {
        $semester = Semester::find($id);

        if ($semester) {

            $semester->delete();

            return response()->json(['success' => true, 'data' => 'Semester destroyed'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Semester not found'], 404);
    }
}
