<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use Validator;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        $locations = Location::filter($request)->get();

        return response()->json(['success' => true, 'data' => $locations], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => [
                'required',
            ],
            'location' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $location = Location::create($request->all());

        return response()->json(['success' => true, 'data' => 'Location created'], 201);
    }

    public function show($id)
    {
        $location = Location::find($id);

        if ($location) {

            return response()->json(['success' => true, 'data' => $location], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Location not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => [
                'required',
            ],
            'location' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $location = Location::find($id);

        if ($location) {

            $location->update($request->all());

            return response()->json(['success' => true, 'data' => 'Location updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Location not found'], 404);
    }

    public function destroy($id)
    {
        $location = Location::find($id);

        if ($location) {

            $location->delete();

            return response()->json(['success' => true, 'data' => 'Location destroyed'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Location not found'], 404);
    }
}
