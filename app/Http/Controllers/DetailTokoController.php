<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TokoUser;
use App\Models\Barang;

class DetailTokoController extends Controller
{
    public function index($id)
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
    public function detail(Request $request)
{
    $tokoUser = TokoUser::where('name', 'like', '%'.$request->input('searchuser').'%')->first();
    
    
    $barangs = Barang::where('nama_barang', 'like', '%'.$request->input('searchuser').'%')
        ->orWhere('harga', 'like', '%'.$request->input('searchuser').'%')
        ->orWhere('jumlah_stok', 'like', '%'.$request->input('searchuser').'%')
        ->get();

    return view('user.DetailToko', compact('tokoUser', 'barangs'));
}
    
}
