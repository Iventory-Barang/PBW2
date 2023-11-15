<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailTokoController extends Controller
{
    public function detail()
    {
        return view('user.DetailToko');
    }
}
