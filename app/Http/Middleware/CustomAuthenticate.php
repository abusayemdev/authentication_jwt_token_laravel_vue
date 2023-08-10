<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\facades\JWTAuth;

class CustomAuthenticate
{

    public function handle(Request $request, Closure $next)
    {
        JWTAuth::parseToken()->authenticate();
        return $next($request);
    }
}
