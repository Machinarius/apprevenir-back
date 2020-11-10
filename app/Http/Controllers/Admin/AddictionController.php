<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Addiction;
use Validator;

class AddictionController extends Controller
{
    public function index(Request $request)
    {
        $addictions = Addiction::filter($request)->get();

        return response()->json(['success' => true, 'data' => $addictions], 200);
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

        $addiction = Addiction::create($request->all());

        return response()->json(['success' => true, 'data' => 'Addiction created'], 201);
    }

    public function show($id)
    {
        $addiction = Addiction::find($id);

        if ($addiction) {

            return response()->json(['success' => true, 'data' => $addiction], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Addiction not found'], 404);
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

        $addiction = Addiction::find($id);

        if ($addiction) {

            $addiction->update($request->all());

            return response()->json(['success' => true, 'data' => 'Addiction updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Addiction not found'], 404);
    }

    public function destroy($id)
    {
        $addiction = Addiction::find($id);

        if ($addiction) {

            $addiction->delete();

            return response()->json(['success' => true, 'data' => 'Addiction destroyed'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Addiction not found'], 404);
    }
}
