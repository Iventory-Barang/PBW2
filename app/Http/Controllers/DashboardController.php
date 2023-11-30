<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $tokoUsers = User::where('role', 'TOKO')->get();

        return view('dashboard', compact('tokoUsers'));
    }
    public function detail()
    {
        $tokoUsers = User::where('role', 'TOKO')->get();

        return view('dashboarduser', compact('tokoUsers'));
    }
}
