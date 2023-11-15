<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$levels): Response
    {
        if (!auth()->check()) {
            return redirect('/login');
        }
    
        $userRoles = explode(',', auth()->user()->role);

        Log::info('User Roles: ' . implode(',', $userRoles));

        foreach ($levels as $role) {
            if (in_array($role, $userRoles)) {
                // Check if the user has the role "toko"
                if ($role == 'toko') {
                    // Redirect to the toko dashboard route (replace 'toko.dashboard' with your actual route)
                    return redirect()->route('dashboardtoko');
                }
                return $next($request);
            }
        }

        // if (in_array($request->user()->role,$levels)) {
        //     return $next($request);
        // }
        return redirect('/');
    }
}
