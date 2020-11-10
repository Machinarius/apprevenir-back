<?php

namespace App\Http\Controllers\Secretary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EducationalInstitution;
use Validator;

class EducationalInstitutionController extends Controller
{
    public function index(Request $request)
    {
        $educationalInstitutions = EducationalInstitution::filter($request)->get();

        return response()->json(['success' => true, 'data' => $educationalInstitutions], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => [
                'required',
            ],
            'educational_institution' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $educationalInstitution = EducationalInstitution::create($request->all());

        return response()->json(['success' => true, 'data' => 'Educational Institution created'], 201);
    }

    public function show($id)
    {
        $educationalInstitution = EducationalInstitution::find($id);

        if ($educationalInstitution) {

            return response()->json(['success' => true, 'data' => $educationalInstitution], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Educational Institution not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => [
                'required',
            ],
            'educational_institution' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $educationalInstitution = EducationalInstitution::find($id);

        if ($educationalInstitution) {

            $educationalInstitution->update($request->all());

            return response()->json(['success' => true, 'data' => 'Educational Institution updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Educational Institution not found'], 404);
    }

    public function destroy($id)
    {
        $educationalInstitution = EducationalInstitution::find($id);

        if ($educationalInstitution) {

            $educationalInstitution->delete();

            return response()->json(['success' => true, 'data' => 'Educational Institution destroyed'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Educational Institution not found'], 404);
    }
}
