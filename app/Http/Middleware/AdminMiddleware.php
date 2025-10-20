<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Dummy admin check
        $token = $request->header('Authorization');

        if ($token !== 'admin123') {
            return response()->json(['message' => 'Unauthorized. Only admin can access this endpoint.'], 403);
        }

        return $next($request);
    }
}
