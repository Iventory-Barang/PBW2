<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use App\Models\TokoUser;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Barang;

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
public function list(Request $request)
{
    // Lakukan logika pencarian TokoUser berdasarkan nama toko
    $tokoUser = TokoUser::where('name', 'like', '%'.$request->input('search').'%')->first();
    
    
    // Lakukan logika pencarian Barang
    $barangs = Barang::where('nama_barang', 'like', '%'.$request->input('search').'%')
        ->orWhere('harga', 'like', '%'.$request->input('search').'%')
        ->orWhere('jumlah_stok', 'like', '%'.$request->input('search').'%')
        ->get();

    return view('barang.list', compact('tokoUser', 'barangs'));
}


    
}
