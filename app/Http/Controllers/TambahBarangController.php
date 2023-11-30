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
        // Validasi data jika diperlukan
        $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif',
            'jumlah_stok' => 'required|numeric',
        ]);
    
        // Dapatkan informasi toko dari pengguna yang saat ini login
        $toko = Auth::user();
    
        // Simpan data ke database dengan menambahkan 'toko_user_id'
        $gambarPath = $request->file('gambar')->store('nama_folder_upload_gambar', 'public');
    
        $barang = new Barang([
            'nama_barang' => $request->input('nama_barang'),
            'harga' => $request->input('harga'),
            'gambar' => $gambarPath,
            'jumlah_stok' => $request->input('jumlah_stok'),
        ]);
    
        // Setel 'toko_user_id' berdasarkan toko yang login
        $barang->toko()->associate($toko);
        
        $barang->save();
    
        // Redirect atau berikan respons sesuai kebutuhan Anda
        return redirect()->route('barang.tambah')->with('success', 'Data berhasil disimpan');
    }



}
