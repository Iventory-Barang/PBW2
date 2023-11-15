<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function detail(Request $request)
    {
        return view('dashboardtoko');
    }
}
