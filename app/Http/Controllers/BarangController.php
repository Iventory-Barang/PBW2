<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang;
use App\Models\TokoUser;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class BarangController extends Controller
{
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama_barang' => 'required',
        'harga' => 'required|numeric',
        'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'jumlah_stok' => 'required|numeric',
    ]);

    $barang = new Barang;
    $barang->nama_barang = $validatedData['nama_barang'];
    $barang->harga = $validatedData['harga'];
        // if ($request->hasFile('gambar')) {
        //     $imagePath = $request->file('gambar')->store('nama_folder_upload_gambar', 'public');
        //     $barang->gambar = $imagePath;
        // }
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('nama_folder_upload_gambar/', $request->file('gambar')->getClientOriginalName());
            $barang->gambar = $request->file('gambar')->getClientOriginalName();
        }
    $barang->jumlah_stok = $validatedData['jumlah_stok'];
    $barang->save();

}
public function tambah(Request $request)
{
    $validatedData = $request->validate([
        'nama_barang' => 'required',
        'harga' => 'required|numeric',
        'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'jumlah_stok' => 'required|numeric',
    ]);

    $barang = new Barang;
    $barang->nama_barang = $validatedData['nama_barang'];
    $barang->harga = $validatedData['harga'];

    if ($request->hasFile('gambar')) {
        
        $imageName = time().'.'.$request->gambar->extension();

        $directoryPath = 'public/nama_folder_upload_gambar/';
        if (!Storage::exists($directoryPath)) {
            Storage::makeDirectory($directoryPath, 0755, true);
        }

        $request->gambar->storeAs($directoryPath, $imageName);

        $barang->gambar = $directoryPath . $imageName;
    }

    $barang->jumlah_stok = $validatedData['jumlah_stok'];
    $barang->save();

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
// public function edit()
// {
//     // Ambil data barang berdasarkan ID
//     $barang = Barang::find();

//     // Periksa apakah barang ditemukan
//     if (!$barang) {
//         return redirect()->route('dashboardtoko')->with('error', 'Barang tidak ditemukan.');
//     }

//     // Kirim data barang ke tampilan edit
//     return view('barang.edit', compact('barang'));
// }
public function edit()
{
    $barang = Barang::first(); 

    if (!$barang) {
        return redirect()->route('dashboardtoko')->with('error', 'Barang tidak ditemukan.');
    }

    return view('barang.edit', compact('barang'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'harga' => 'required',
        'jumlah_stok' => 'required',
    ]);

    $barang = Barang::find($id);

    if (!$barang) {
        return redirect()->route('dashboardtoko')->with('error', 'Barang tidak ditemukan.');
    }

    $barang->harga = $request->harga;
    $barang->jumlah_stok = $request->jumlah_stok;

    $barang->save();

    return redirect()->route('dashboardtoko')->with('success', 'Barang berhasil diperbarui.');
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

public function index()
{
    $toko = Auth::user();

    if (!$toko) {
        return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
    }

    $barangs = $toko->barangs;

    return view('dashboardtoko', ['barangs' => $barangs]);
}
    public function detailFunction($nama_barang)
    {

    dd($nama_barang);
    
    }
    public function searchtoko(Request $request)
{

    $tokoUser = TokoUser::where('name', 'like', '%'.$request->input('searchtoko').'%')->first();
    

    $barangs = Barang::where('nama_barang', 'like', '%'.$request->input('searchtoko').'%')
        ->orWhere('harga', 'like', '%'.$request->input('searchtoko').'%')
        ->orWhere('jumlah_stok', 'like', '%'.$request->input('searchtoko').'%')
        ->get();

    return view('dashboardtoko', compact('tokoUser', 'barangs'));
}
public function profile()
    {
        return view('barang.profile');
    }
}
