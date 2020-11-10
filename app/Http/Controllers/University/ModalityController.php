<?php

namespace App\Http\Controllers\University;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modality;
use Validator;

class ModalityController extends Controller
{
    public function index(Request $request)
    {
        $modalities = Modality::filter($request)->get();

        return response()->json(['success' => true, 'data' => $modalities], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'program_id' => [
                'required',
            ],
            'modality' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $modality = Modality::create($request->all());

        return response()->json(['success' => true, 'data' => 'Modality created'], 201);
    }

    public function show($id)
    {
        $modality = Modality::find($id);

        if ($modality) {

            return response()->json(['success' => true, 'data' => $modality], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Modality not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'program_id' => [
                'required',
            ],
            'modality' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $modality = Modality::find($id);

        if ($modality) {

            $modality->update($request->all());

            return response()->json(['success' => true, 'data' => 'Modality updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Modality not found'], 404);
    }

    public function destroy($id)
    {
        $modality = Modality::find($id);

        if ($modality) {

            $modality->delete();

            return response()->json(['success' => true, 'data' => 'Modality destroyed'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Modality not found'], 404);
    }
}
