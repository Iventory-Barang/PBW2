<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TokoUser;

class DetailTokoController extends Controller
{
    public function detail($id)
    {
        $tokoUser = TokoUser::find($id);

    if (!$tokoUser) {
        return redirect()->route('dashboarduser')->with('error', 'Toko tidak ditemukan');
    }

    $barangs = $tokoUser->barangs;

    return view('user.DetailToko', [
        'barangs' => $barangs,
        'tokoUser' => $tokoUser,
    ]);
    }
}
