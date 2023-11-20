<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function store(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'nama_barang' => 'required',
        'harga' => 'required|numeric',
        'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'jumlah_stok' => 'required|numeric',
    ]);

    // Create a new Barang instance and save it to the database
    $barang = new Barang;
    $barang->nama_barang = $validatedData['nama_barang'];
    $barang->harga = $validatedData['harga'];
    // Handle image upload if applicable
    // $barang->gambar = // logic to handle image upload;
    $barang->jumlah_stok = $validatedData['jumlah_stok'];
    $barang->save();

    // Redirect or return a response as needed
}
public function tambah(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'jumlah_stok' => 'required|numeric',
        ]);

        // Create a new Barang instance and save it to the database
        $barang = new Barang;
        $barang->nama_barang = $validatedData['nama_barang'];
        $barang->harga = $validatedData['harga'];
        // Handle image upload if applicable
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('barang_images', 'public');
            $barang->gambar = $imagePath;
        }
        $barang->jumlah_stok = $validatedData['jumlah_stok'];
        $barang->save();

        // Redirect or return a response as needed
    }
    public function detail(Request $request)
{
    $nama_barang = $request->input('nama_barang');

    $barang = Barang::where('nama_barang', $nama_barang)->first();

    if ($barang) {
        return view('barang.detail', ['nama_barang' => $barang->nama_barang, 'barang' => $barang]);
    } else {
        return redirect()->route('dashboardtoko')->with('error', 'Barang tidak ditemukan.');
    }
}
    public function edit()
    {
        return view('barang.edit');
    }
    public function index()
    {
    $barangs = Barang::all();
    return view('dashboardtoko', compact('barangs'));
    }
    public function detailFunction($nama_barang)
{

    // Logika lainnya untuk mendapatkan data halaman detail
    dd($nama_barang);
    // return view('barang.detail', ['nama_barang' => $nama_barang, /* data lainnya */]);
}
}
