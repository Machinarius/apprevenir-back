<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DifficultyLevel;
use Validator;

class DifficultyLevelController extends Controller
{
    public function index(Request $request)
    {
        $difficultyLevels = DifficultyLevel::filter($request)->get();

        return response()->json(['success' => true, 'data' => $difficultyLevels], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
            ],
            'lang' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $difficultyLevel = DifficultyLevel::create($request->all());

        return response()->json(['success' => true, 'data' => 'DifficultyLevel created'], 201);
    }

    public function show($id)
    {
        $difficultyLevel = DifficultyLevel::find($id);

        if ($difficultyLevel) {

            return response()->json(['success' => true, 'data' => $difficultyLevel], 200);
        }

        return response()->json(['success' => false, 'errors' => 'DifficultyLevel not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
            ],
            'lang' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $difficultyLevel = DifficultyLevel::find($id);

        if ($difficultyLevel) {

            $difficultyLevel->update($request->all());

            return response()->json(['success' => true, 'data' => 'DifficultyLevel updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'DifficultyLevel not found'], 404);
    }

    public function destroy($id)
    {
        $difficultyLevel = DifficultyLevel::find($id);

        if ($difficultyLevel) {

            $difficultyLevel->delete();

            return response()->json(['success' => true, 'data' => 'DifficultyLevel destroyed'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'DifficultyLevel not found'], 404);
    }
}
