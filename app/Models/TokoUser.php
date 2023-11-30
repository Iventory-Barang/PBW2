<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokoUser extends Model
{
    use HasFactory;

    protected $table = 'users'; // Sesuaikan dengan nama tabel sebenarnya

    // protected $fillable = [
    //     'name', 'email', 'password', 'role', // Sesuaikan dengan kolom yang ada di tabel users
    // ];
    protected $fillable = ['TOKO'];

    public function barangs()
    {
        return $this->hasMany(Barang::class, 'toko_user_id');
    }
}
