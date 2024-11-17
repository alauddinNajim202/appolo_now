<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {

        $userRole = Auth::user()->role;

        // Check for admin role
        if ($role === 'admin' && $userRole === 'admin') {
            return $next($request);
        }

        // Check for client role
        if ($role === 'artist' && $userRole === 'artist') {
            return $next($request);
        }

        // Check for tax_prepare role
        if ($role === 'listener' && $userRole === 'listener') {
            return $next($request);
        }

        // If none of the roles match, redirect with an error message
        return redirect()->back()->with('error', "You don't have the required access.");
    }
}
