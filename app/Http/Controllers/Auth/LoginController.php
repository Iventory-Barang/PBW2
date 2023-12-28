<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Log;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected function authenticated(Request $request, $user)
{
    Log::info('Role: ' . $user->role);
    if ($user->role == 'TOKO') {
        return redirect()->route('dashboardtoko');
    } elseif ($user->role == 'admin') {
        return redirect()->route('dashboard');
    } elseif ($user->role == 'user') {
        return redirect()->route('dashboard');
    } else {
        return redirect('/'); 
    }
}
}
