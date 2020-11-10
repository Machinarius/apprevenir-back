<?php

namespace App\Http\Controllers\Institution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EducationalGrade;
use Validator;

class EducationalGradeController extends Controller
{
    public function index(Request $request)
    {
        $educationalGrades = EducationalGrade::filter($request)->get();

        return response()->json(['success' => true, 'data' => $educationalGrades], 200);
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

        $grade = EducationalGrade::create($request->all());

        return response()->json(['success' => true, 'data' => 'Educational Grade created'], 201);
    }

    public function show($id)
    {
        $educationalGrade = EducationalGrade::find($id);

        if ($educationalGrade) {

            return response()->json(['success' => true, 'data' => $educationalGrade], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Educational Grade not found'], 404);
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

        $educationalGrade = EducationalGrade::find($id);

        if ($educationalGrade) {

            $educationalGrade->update($request->all());

            return response()->json(['success' => true, 'data' => 'Educational Grade updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Educational Grade not found'], 404);
    }

    public function destroy($id)
    {
        $educationalGrade = EducationalGrade::find($id);

        if ($educationalGrade) {

            $educationalGrade->delete();

            return response()->json(['success' => true, 'data' => 'Educational Grade destroyed'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Educational Grade not found'], 404);
    }
}
