<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController extends Controller
{
    public function detail()
    {
        // Logika untuk menangani permintaan detail barang
        // Misalnya, Anda dapat mengembalikan tampilan atau data JSON
        return view('barang.list'); // Sesuaikan dengan kebutuhan Anda
    }
}
