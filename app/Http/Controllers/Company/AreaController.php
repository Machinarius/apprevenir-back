<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;
use Validator;

class AreaController extends Controller
{
    public function index(Request $request)
    {
        $areas = Area::filter($request)->get();

        return response()->json(['success' => true, 'data' => $areas], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'location_id' => [
                'required',
            ],
            'area' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $area = Area::create($request->all());

        return response()->json(['success' => true, 'data' => 'Area created'], 201);
    }

    public function show($id)
    {
        $area = Area::find($id);

        if ($area) {

            return response()->json(['success' => true, 'data' => $area], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Area not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'location_id' => [
                'required',
            ],
            'area' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $area = Area::find($id);

        if ($area) {

            $area->update($request->all());

            return response()->json(['success' => true, 'data' => 'Area updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Area not found'], 404);
    }

    public function destroy($id)
    {
        $area = Area::find($id);

        if ($area) {

            $area->delete();

            return response()->json(['success' => true, 'data' => 'Area destroyed'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Area not found'], 404);
    }
}
