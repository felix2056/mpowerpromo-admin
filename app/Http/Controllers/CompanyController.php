<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function index()
    {
        // get companies with count of customers and orders and orders_total
        $companies = Company::withCount(['customers', 'orders'])->withSum('orders', 'total')->get();

        return response()->json([
            'message' => 'Successfully retrieved companies',
            'companies' => $companies
        ], 200);
    }

    public function store(Request $request)
    {
        $errors = [
            'name.required' => 'The Company Name field is required',
            'name.string' => 'The Company Name field must be a string',
            'website.url' => 'The Website field must be a valid URL',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'website' => 'nullable|url',
        ], $errors);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $user = User::find(Auth::id());
        if (!$user) return response()->json([
            'message' => 'User not found'
        ], 404);

        $company = Company::create([
            'user_id' => $user->id,
            'name' => $request->name,
            'website' => $request->website,
            'slug' => md5(time())
        ]);

        return response()->json([
            'message' => 'Successfully created company',
            'company' => $company
        ], 201);
    }

    public function show($slug)
    {
        $company = Company::where('slug', $slug)->withCount(['customers', 'orders'])->withSum('orders', 'total')->first();

        if (!$company) {
            return response()->json([
                'message' => 'Company not found'
            ], 404);
        }

        return response()->json([
            'message' => 'Successfully retrieved company',
            'company' => $company
        ], 200);
    }

    public function update(Request $request, $slug)
    {
        $errors = [
            'name.required' => 'The Company Name field is required',
            'name.string' => 'The Company Name field must be a string',
            'website.url' => 'The Website field must be a valid URL',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'website' => 'nullable|url',
        ], $errors);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $company = Company::where('slug', $slug)->first();

        if (!$company) {
            return response()->json([
                'message' => 'Company not found'
            ], 404);
        }

        $company->update([
            'name' => $request->name,
            'website' => $request->website,
            'slug' => $this->generateSlug($request->name)
        ]);

        return response()->json([
            'message' => 'Successfully updated company',
            'company' => $company
        ], 200);
    }

    public function destroy($slug)
    {
        $company = Company::where('slug', $slug)->first();

        if (!$company) {
            return response()->json([
                'message' => 'Company not found'
            ], 404);
        }

        $company->delete();

        return response()->json([
            'message' => 'Successfully deleted company'
        ], 200);
    }
}
