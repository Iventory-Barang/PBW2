<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;
    protected $table = 'users'; // sesuaikan dengan nama tabel sebenarnya
    protected $fillable = ['TOKO'];
    
    
    public function barangs()
    {
        return $this->hasMany(Barang::class, 'toko_user_id');
    }
}
