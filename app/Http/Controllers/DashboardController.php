<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TokoUser;

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

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $tokoUsers = TokoUser::where('name', 'like', '%' . $searchTerm . '%')->get();

        return view('dashboard', compact('tokoUsers'));
    }
    public function searchuser(Request $request)
    {
        $searchTerm = $request->input('searchuser');

        $tokoUsers = TokoUser::where('name', 'like', '%' . $searchTerm . '%')->get();

        return view('dashboarduser', compact('tokoUsers'));
    }
}
