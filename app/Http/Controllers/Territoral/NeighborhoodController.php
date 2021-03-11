<?php

namespace App\Http\Controllers\Territoral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Neighborhood;
use Validator;

class NeighborhoodController extends Controller
{
    public function index(Request $request)
    {
        $neighborhoods = Neighborhood::filter($request)->get();

        return response()->json(['success' => true, 'data' => $neighborhoods], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => [
                'required',
            ],
            'neighborhood' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $neighborhood = Neighborhood::create($request->all());

        return response()->json(['success' => true, 'data' => 'Neighborhood created'], 201);
    }

    public function show($id)
    {
        $neighborhood = Neighborhood::find($id);

        if ($neighborhood) {

            return response()->json(['success' => true, 'data' => $neighborhood], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Neighborhood not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => [
                'required',
            ],
            'neighborhood' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $neighborhood = Neighborhood::find($id);

        if ($neighborhood) {

            $neighborhood->update($request->all());

            return response()->json(['success' => true, 'data' => 'Neighborhood updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Neighborhood not found'], 404);
    }

    public function destroy($id)
    {
        $neighborhood = Neighborhood::find($id);

        if ($neighborhood) {

            $neighborhood->delete();

            return response()->json(['success' => true, 'data' => 'Neighborhood destroyed'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Neighborhood not found'], 404);
    }
}
