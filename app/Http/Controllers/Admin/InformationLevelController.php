<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InformationLevel;
use Validator;

class InformationLevelController extends Controller
{
    public function index(Request $request)
    {
        $informationlevels = InformationLevel::filter($request)->get();

        return response()->json(['success' => true, 'data' => $informationlevels], 200);
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

        $informationLevel = InformationLevel::create($request->all());

        return response()->json(['success' => true, 'data' => 'InformationLevel created'], 201);
    }

    public function show($id)
    {
        $informationLevel = InformationLevel::find($id);

        if ($informationLevel) {

            return response()->json(['success' => true, 'data' => $informationLevel], 200);
        }

        return response()->json(['success' => false, 'errors' => 'InformationLevel not found'], 404);
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

        $informationLevel = InformationLevel::find($id);

        if ($informationLevel) {

            $informationLevel->update($request->all());

            return response()->json(['success' => true, 'data' => 'InformationLevel updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'InformationLevel not found'], 404);
    }

    public function destroy($id)
    {
        $informationLevel = InformationLevel::find($id);

        if ($informationLevel) {

            $informationLevel->delete();

            return response()->json(['success' => true, 'data' => 'InformationLevel destroyed'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'InformationLevel not found'], 404);
    }
}
