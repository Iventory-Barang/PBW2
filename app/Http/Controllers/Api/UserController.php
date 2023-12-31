<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $data = User::orderBy('name', 'asc')->get();
        return response()->json([
            'status' => true,
            'message'=> 'Data ditemukan',
            'data' => $data
        ], 202);
    }


    public function store(Request $request)
    {
        $dataUser = new User;
        $dataUser->name = $request->name;
        $dataUser->email = $request->email;
        $dataUser->password = $request->password;
        $dataUser->role = $request->role;

        $post = $dataUser->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses Memasukan Data'
        ]);
    }


    public function show(string $id)
    {
        $data = User::find($id);
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
        $dataUser = User::find($id);
        if (empty($dataUser)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
        $dataUser->name = $request->name;
        $dataUser->email = $request->email;
        $dataUser->password = $request->password;
        $dataUser->role = $request->role;

        $post = $dataUser->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses Melakukan Update Data'
        ]);
    }


    public function destroy(string $id)
    {
        $dataUser = User::find($id);
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
