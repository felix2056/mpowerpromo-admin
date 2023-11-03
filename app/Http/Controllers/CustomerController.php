<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

use App\Models\Customer;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::with(['companies', 'phones'])->get();
        return response()->json([
            'message' => 'Successfully retrieved customers',
            'customers' => $customers
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "first_name" => "required|string",
            "last_name" => "required|string",
            "email" => "required|email|unique:customers",
            "password" => "required|string",
            // "address" => "required|string",
            // "city" => "required|string",
            // "state" => "required|string",
            // "zip" => "required|string",
            // "country" => "required|string",
            "company" => "nullable|array",
            "job_title" => "nullable|string",
            "quickbooks_id" => "nullable|string",
            "rank" => "nullable|array",
            "is_active" => "nullable|boolean",
            "is_test" => "nullable|boolean",
            "phones" => "nullable|array",
            "phones.*.country_code" => "nullable|string",
            "phones.*.country_flag" => "nullable|string",
            "phones.*.phone_number" => "nullable|string",
            "phones.*.extension" => "nullable|string",
            "phones.*.is_primary" => "nullable|boolean"
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Failed to create customer',
                'errors' => $validator->errors()
            ], 422);
        }

        // if ($request->has('rank')) {
        //     $request->merge([
        //         'rank' => $request->rank['name']
        //     ]);
        // }

        $customer = Customer::create([
            "slug" => md5(time()),
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "job_title" => $request->job_title,
            "quickbooks_id" => $request->quickbooks_id,
            "rank" => $request->rank['name'],
            "is_active" => $request->is_active,
            "is_test" => $request->is_test,
            "address" => $request->address,
            "country" => $request->country,
            "street1" => $request->street1,
            "street2" => $request->street2,
            "city" => $request->city,
            "state" => $request->state,
            "zip" => $request->zip
        ]);

        if ($request->has('company')) {
            $company = Company::find($request->company['id']);

            if ($company) {
                $customer->companies()->attach($company);
            }
        }

        if ($request->has('phones')) {
            foreach ($request->phones as $phone) {
                $customer->phones()->create($phone);
            }
        }
        
        return response()->json([
            'message' => 'Successfully created customer',
            'customer' => $customer->load(['companies', 'phones'])
        ], 201);
    }
}
