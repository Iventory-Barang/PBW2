<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TambahBarangController extends Controller
{
    public function create()
    {
        return view('barang.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif',
            'jumlah_stok' => 'required|numeric',
        ]);
    
        $toko = Auth::user();
    
        $gambarPath = $request->file('gambar')->store('nama_folder_upload_gambar', 'public');
    
        $barang = new Barang([
            'nama_barang' => $request->input('nama_barang'),
            'harga' => $request->input('harga'),
            'gambar' => $gambarPath,
            'jumlah_stok' => $request->input('jumlah_stok'),
        ]);
    
        $barang->toko()->associate($toko);
        
        $barang->save();
    
        return redirect()->route('barang.tambah')->with('success', 'Data berhasil disimpan');
    }



}
