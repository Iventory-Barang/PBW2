<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahBarangController extends Controller
{
    public function tambahForm()
    {
        return view('barang.tambah');
    }

    public function create(Request $request)
    {
        // Validasi input sesuai kebutuhan Anda
        // $request->validate([
        //     'nama' => 'required|string|max:255',
        //     'harga' => 'required|numeric',
            // Tambahkan validasi lain sesuai kebutuhan
        // ]);

        // Simpan barang baru ke dalam database
        // $barang = new Barang;
        // $barang->nama = $request->nama;
        // $barang->harga = $request->harga;
        // // Setel properti lain sesuai kebutuhan
        // $barang->save();

        // // Redirect ke halaman yang sesuai
        // return redirect()->route('halaman.tujuan')->with('success', 'Barang berhasil ditambahkan!');
        return view('barang.tambah');
    }
}
