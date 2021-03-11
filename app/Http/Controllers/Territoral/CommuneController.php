<?php

namespace App\Http\Controllers\Territoral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Commune;
use Validator;

class CommuneController extends Controller
{
    public function index(Request $request)
    {
        $communes = Commune::filter($request)->get();

        return response()->json(['success' => true, 'data' => $communes], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => [
                'required',
            ],
            'commune' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $commune = Commune::create($request->all());

        return response()->json(['success' => true, 'data' => 'Commune created'], 201);
    }

    public function show($id)
    {
        $commune = Commune::find($id);

        if ($commune) {

            return response()->json(['success' => true, 'data' => $commune], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Commune not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => [
                'required',
            ],
            'commune' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $commune = Commune::find($id);

        if ($commune) {

            $commune->update($request->all());

            return response()->json(['success' => true, 'data' => 'Commune updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Commune not found'], 404);
    }

    public function destroy($id)
    {
        $commune = Commune::find($id);

        if ($commune) {

            $commune->delete();

            return response()->json(['success' => true, 'data' => 'Commune destroyed'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Commune not found'], 404);
    }
}
