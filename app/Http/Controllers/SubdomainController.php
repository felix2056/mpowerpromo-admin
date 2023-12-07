<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubdomainController extends Controller
{
    public function index($subdomain)
    {
        return response()->json([
            'message' => 'Successfully retrieved subdomain',
            'subdomain' => $subdomain
        ], 200);
    }
}
