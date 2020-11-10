<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedul;
use Validator;

class SchedulController extends Controller
{
    public function index(Request $request)
    {
        $schedules = Schedul::filter($request)->get();

        return response()->json(['success' => true, 'data' => $schedules], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'area_id' => [
                'required',
            ],
            'schedul' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $schedul = Schedul::create($request->all());

        return response()->json(['success' => true, 'data' => 'Schedul created'], 201);
    }

    public function show($id)
    {
        $schedul = Schedul::find($id);

        if ($schedul) {

            return response()->json(['success' => true, 'data' => $schedul], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Schedul not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'area_id' => [
                'required',
            ],
            'schedul' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $schedul = Schedul::find($id);

        if ($schedul) {

            $schedul->update($request->all());

            return response()->json(['success' => true, 'data' => 'Schedul updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Schedul not found'], 404);
    }

    public function destroy($id)
    {
        $schedul = Schedul::find($id);

        if ($schedul) {

            $schedul->delete();

            return response()->json(['success' => true, 'data' => 'Schedul destroyed'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Schedul not found'], 404);
    }
}
