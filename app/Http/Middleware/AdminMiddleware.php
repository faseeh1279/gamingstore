<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Enum\UserRole; 

class AdminMiddleware
{
     public function handle(Request $request, Closure $next): Response
    {
        if (! auth()->check()) {
            return redirect()->route('login');
        }

        if (auth()->user()->role !== UserRole::Admin) {
            abort(403, 'You are not authorized to access this page.');
        }

        return $next($request);
    }
}
