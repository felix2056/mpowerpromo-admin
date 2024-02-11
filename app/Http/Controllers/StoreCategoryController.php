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

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_type_id' => 'required|integer',
            'name' => 'required|string',
            'description' => 'nullable|string',
            'slug' => 'required|string',
            'parent_id' => 'nullable|integer',
            'child_id' => 'nullable|integer',
            'related_categories' => 'nullable|array',
            'related_categories.*' => 'integer',
            'redirect_urls' => 'nullable|array',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors()
            ], 422);
        }

        if (!CategoryType::find($request->category_type_id)) {
            return response()->json([
                'message' => 'Category type not found.'
            ], 404);
        }

        if ($request->parent_id && !Category::find($request->parent_id)) {
            return response()->json([
                'message' => 'Parent category not found.'
            ], 404);
        }

        if ($request->child_id && !Category::find($request->child_id)) {
            return response()->json([
                'message' => 'Child category not found.'
            ], 404);
        }

        if ($request->related_categories) {
            foreach ($request->related_categories as $related_category) {
                if (!Category::find($related_category)) {
                    return response()->json([
                        'message' => 'Related category not found for id: ' . $related_category
                    ], 404);
                }
            }
        }

        $category = new Category();
        $category->category_type_id = $request->category_type_id;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->slug = $request->slug;
        $category->parent_id = $request->parent_id;
        $category->child_id = $request->child_id;
        $category->related_categories = json_encode($request->related_categories);
        $category->save();

        if ($request->redirect_urls) {
            foreach ($request->redirect_urls as $redirect_url) {
                $category->redirectUrls()->create([
                    'url' => $redirect_url
                ]);
            }
        }

        return response()->json([
            'message' => 'Category created successfully.',
            'category' => $category
        ], 201);
    }
}
