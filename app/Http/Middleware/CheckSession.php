<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckSession
{
    public function handle($request, Closure $next)
    {
        // Check if the session value is set to the specific value
        if ($request->session()->get('role') !== 'admin') {
            // Redirect or return an error response if the session value is not as expected
            return redirect()->route('login')->with('error', 'Unauthorized access');
        }
 
        return $next($request);
    }
}
