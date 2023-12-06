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
        // if ($request->hasFile('gambar')) {
        //     $imagePath = $request->file('gambar')->store('nama_folder_upload_gambar', 'public');
        //     $barang->gambar = $imagePath;
        // }
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('nama_folder_upload_gambar/', $request->file('gambar')->getClientOriginalName());
            $barang->gambar = $request->file('gambar')->getClientOriginalName();
        }
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
        // Generate a unique name for the image
        $imageName = time().'.'.$request->gambar->extension();

        // Make sure the directory exists, if not, create it
        $directoryPath = 'public/nama_folder_upload_gambar/';
        if (!Storage::exists($directoryPath)) {
            Storage::makeDirectory($directoryPath, 0755, true);
        }

        // Store the image in the specified directory
        $request->gambar->storeAs($directoryPath, $imageName);

        // Save the image path to the database
        $barang->gambar = $directoryPath . $imageName;
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
    // Ambil data barang dari suatu sumber, misalnya dari database
    // Di sini, saya menganggap Anda memiliki model Barang dan tabel barang di database
    $barang = Barang::first(); // Sesuaikan sesuai kebutuhan Anda

    // Periksa apakah barang ditemukan
    if (!$barang) {
        return redirect()->route('dashboardtoko')->with('error', 'Barang tidak ditemukan.');
    }

    // Kirim data barang ke tampilan edit
    return view('barang.edit', compact('barang'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'harga' => 'required',
        'jumlah_stok' => 'required',
        // ... (tambahkan validasi lainnya sesuai kebutuhan)
    ]);

    // Ambil barang berdasarkan ID
    $barang = Barang::find($id);

    // Pastikan barang ditemukan
    if (!$barang) {
        return redirect()->route('dashboardtoko')->with('error', 'Barang tidak ditemukan.');
    }

    // Perbarui data barang dengan data dari form
    $barang->harga = $request->harga;
    $barang->jumlah_stok = $request->jumlah_stok;

    // Simpan perubahan ke database
    $barang->save();

    // Redirect dengan pesan sukses
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
    // Dapatkan informasi toko dari pengguna yang saat ini login
    $toko = Auth::user();

    // Pastikan toko ditemukan
    if (!$toko) {
        return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
    }

    // Dapatkan semua barang dari toko yang login
    $barangs = $toko->barangs;

    return view('dashboardtoko', ['barangs' => $barangs]);
}
    public function detailFunction($nama_barang)
    {

    // Logika lainnya untuk mendapatkan data halaman detail
    dd($nama_barang);
    // return view('barang.detail', ['nama_barang' => $nama_barang, /* data lainnya */]);
    }
    public function searchtoko(Request $request)
{
    // Lakukan logika pencarian TokoUser berdasarkan nama toko
    $tokoUser = TokoUser::where('name', 'like', '%'.$request->input('searchtoko').'%')->first();
    
    
    // Lakukan logika pencarian Barang
    $barangs = Barang::where('nama_barang', 'like', '%'.$request->input('searchtoko').'%')
        ->orWhere('harga', 'like', '%'.$request->input('searchtoko').'%')
        ->orWhere('jumlah_stok', 'like', '%'.$request->input('searchtoko').'%')
        ->get();

    return view('dashboardtoko', compact('tokoUser', 'barangs'));
}
}
