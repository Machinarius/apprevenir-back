<?php

namespace App\Http\Controllers\Territoral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Zone;
use Validator;

class ZoneController extends Controller
{
    public function index(Request $request)
    {
        $zones = Zone::filter($request)->get();

        return response()->json(['success' => true, 'data' => $zones], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => [
                'required',
            ],
            'zone' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $zone = Zone::create($request->all());

        return response()->json(['success' => true, 'data' => 'Zone created'], 201);
    }

    public function show($id)
    {
        $zone = Zone::find($id);

        if ($zone) {

            return response()->json(['success' => true, 'data' => $zone], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Zone not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => [
                'required',
            ],
            'zone' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $zone = Zone::find($id);

        if ($zone) {

            $zone->update($request->all());

            return response()->json(['success' => true, 'data' => 'Zone updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Zone not found'], 404);
    }

    public function destroy($id)
    {
        $zone = Zone::find($id);

        if ($zone) {

            $zone->delete();

            return response()->json(['success' => true, 'data' => 'Zone destroyed'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Zone not found'], 404);
    }
}
