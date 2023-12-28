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
                if ($role == 'toko') {
                    return redirect()->route('dashboardtoko');
                }
                return $next($request);
            }
        }

        
        return redirect('/');
    }
}
