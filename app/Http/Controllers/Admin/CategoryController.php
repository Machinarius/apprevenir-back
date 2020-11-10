<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Validator;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::filter($request)->get();

        return response()->json(['success' => true, 'data' => $categories], 200);
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

        $category = Category::create($request->all());

        return response()->json(['success' => true, 'data' => 'Category created'], 201);
    }

    public function show($id)
    {
        $category = Category::find($id);

        if ($category) {

            return response()->json(['success' => true, 'data' => $category], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Category not found'], 404);
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

        $category = Category::find($id);

        if ($category) {

            $category->update($request->all());

            return response()->json(['success' => true, 'data' => 'Category updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Category not found'], 404);
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if ($category) {

            $category->delete();

            return response()->json(['success' => true, 'data' => 'Category destroyed'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'Category not found'], 404);
    }
}
