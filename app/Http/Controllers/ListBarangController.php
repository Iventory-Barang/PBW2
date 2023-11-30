<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use App\Models\TokoUser;
use Illuminate\Http\Request;
use App\Models\User;

class ListBarangController extends Controller
{
    public function index($id)
{
    $tokoUser = TokoUser::find($id);

    if (!$tokoUser) {
        return redirect()->route('dashboard')->with('error', 'Toko tidak ditemukan');
    }

    $barangs = $tokoUser->barangs;

    return view('barang.list', [
        'barangs' => $barangs,
        'tokoUser' => $tokoUser,
    ]);
}
}
