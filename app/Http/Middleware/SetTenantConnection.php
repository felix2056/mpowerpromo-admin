<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Hyn\Tenancy\Environment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SetTenantConnection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = User::find(Auth::id());
        
        $host = $request->header('X-Tenant-UUID');
        $website = $user->websites()->where('uuid', $host)->first();

        if (!$website) {
            return response()->json([
                'message' => 'Website not found.'
            ], 404);
        }

        app(Environment::class)->tenant($website);

        // $store = \App\Models\Store::first();
        // return response()->json([
        //     'message' => 'Successfully set tenant connection.',
        //     'store' => $store
        // ]);

        return $next($request);
    }
}
