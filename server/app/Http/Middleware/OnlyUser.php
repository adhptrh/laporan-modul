<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OnlyUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();
        
        if ($user)
        {
            if ($user->role == "user")
            {
                return $next($request);
            }
        }

        return response()->json([
            "error"=>"unauthorized"
        ],401);
    }
}
