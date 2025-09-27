<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureFilamentAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
// If not logged in → send to login
        if (! auth()->check()) {
            return redirect()->route('filament.admin.auth.login');
        }

        // If logged in but not admin → log out and send to login
        if (! auth()->user()->is_admin) {
            auth()->logout();

            return redirect()->route('filament.admin.auth.login')
                ->with('failed', 'You are not authorized to access the admin panel.');
        }
        return $next($request);
    }
}
