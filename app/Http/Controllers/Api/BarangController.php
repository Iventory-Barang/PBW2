<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{

    public function index()
    {
        $data = Barang::orderBy('toko_user_id', 'asc')->get();
        return response()->json([
            'status' => true,
            'message'=> 'Data ditemukan',
            'data' => $data
        ], 202);
    }


    public function store(Request $request)
    {
        $dataUser = new Barang;
        $dataUser->toko_user_id = $request->toko_user_id;
        $dataUser->nama_barang = $request->nama_barang;
        $dataUser->harga = $request->harga;
        $dataUser->jumlah_stok = $request->jumlah_stok;

        $post = $dataUser->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses Memasukan Data'
        ]);
    }


    public function show(string $id)
    {
        $data = Barang::find($id);
        if ($data) {
            return response()->json([
                'status' => true,
                'message' => 'Data ditemukan',
                'data' => $data
            ], 200);
        }else {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ]);
        }
    }


    public function update(Request $request, string $id)
    {
        $dataUser = Barang::find($id);
        if (empty($dataUser)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
        $dataUser->toko_user_id = $request->toko_user_id;
        $dataUser->nama_barang = $request->nama_barang;
        $dataUser->harga = $request->harga;
        $dataUser->jumlah_stok = $request->jumlah_stok;

        $post = $dataUser->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses Melakukan Update Data'
        ]);
    }


    public function destroy(string $id)
    {
        $dataUser = Barang::find($id);
        if (empty($dataUser)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        } 

        $post = $dataUser->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses Melakukan Delete Data'
        ]);
    }
}
