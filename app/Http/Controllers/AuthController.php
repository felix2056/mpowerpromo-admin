<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
        
        $credentials = $request->only(['email', 'password']);
        
        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        
        return response()->json([
            'message' => 'Successfully logged in',
            'token' => $token,
            'user' => auth()->user()
        ], 200);
    }
}
