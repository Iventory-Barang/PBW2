<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'toko_user_id',
        'nama_barang',
        'harga', 
        'gambar', 
        'jumlah_stok'
    ];
    public function toko()
    {
        return $this->belongsTo(Toko::class, 'toko_user_id');
    }
    public function tokoUser()
{
    return $this->belongsTo(TokoUser::class, 'toko_user_id');
}
}
