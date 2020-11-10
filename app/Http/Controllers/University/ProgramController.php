<?php

namespace App\Http\Controllers\University;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use Validator;

class ProgramController extends Controller
{
    public function index(Request $request)
    {
        $programs = Program::filter($request)->get();

        return response()->json(['success' => true, 'data' => $programs], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => [
                'required',
            ],
            'program' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $program = Program::create($request->all());

        return response()->json(['success' => true, 'data' => 'Program created'], 201);
    }

    public function show($id)
    {
        $program = Program::find($id);

        if ($program) {

            return response()->json(['success' => true, 'data' => $program], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Program not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => [
                'required',
            ],
            'program' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $program = Program::find($id);

        if ($program) {

            $program->update($request->all());

            return response()->json(['success' => true, 'data' => 'Program updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Program not found'], 404);
    }

    public function destroy($id)
    {
        $program = Program::find($id);

        if ($program) {

            $program->delete();

            return response()->json(['success' => true, 'data' => 'Program destroyed'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Program not found'], 404);
    }
}
