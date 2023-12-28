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
    $tokoUser = TokoUser::where('name', 'like', '%'.$request->input('search').'%')->first();
    
    
    $barangs = Barang::where('nama_barang', 'like', '%'.$request->input('search').'%')
        ->orWhere('harga', 'like', '%'.$request->input('search').'%')
        ->orWhere('jumlah_stok', 'like', '%'.$request->input('search').'%')
        ->get();

    return view('barang.list', compact('tokoUser', 'barangs'));
}

public function hapus($id)
{
    $barang = Barang::find($id);

    if (!$barang) {
        return redirect()->route('dashboardtoko')->with('error', 'Barang tidak ditemukan.');
    }

    $barang->delete();

    return redirect()->route('dashboardtoko')->with('success', 'Barang berhasil dihapus.');
}
    
}
