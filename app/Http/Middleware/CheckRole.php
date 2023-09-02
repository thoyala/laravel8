<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $your_role = $request->user()->role; 
        if (! in_array($your_role, $roles ,True)) {
            // Redirect if not allowed ...
            return redirect('/');  
        }

        
        return $next($request);
    }
}
