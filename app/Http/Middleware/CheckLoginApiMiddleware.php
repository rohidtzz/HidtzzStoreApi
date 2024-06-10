<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Auth;

class CheckLoginApiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->header('Authorization');

        if (!$token) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        try {
            $user = Auth::guard('api')->userOrFail();
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unauthorized','message'=>"kik"], 401);
        }

        return $next($request);
    }
}
