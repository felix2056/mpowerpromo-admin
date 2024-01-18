<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryType;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class StoreCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $category_types = CategoryType::all();
        
        return response()->json([
            'categories' => $categories,
            'category_types' => $category_types
        ], 200);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_type_id' => 'required|integer',
            'name' => 'required|string',
            'description' => 'nullable|string',
            'slug' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors()
            ], 422);
        }

        $category = new Category();
        $category->category_type_id = $request->category_type_id;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->slug = $request->slug;
        $category->save();

        return response()->json([
            'message' => 'Category created successfully.',
            'category' => $category
        ], 201);
    }
}
