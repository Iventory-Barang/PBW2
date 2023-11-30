<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('toko_user_id')->default(1); // Kolom toko_user_id sebagai kunci asing
            $table->string('nama_barang');
            $table->integer('harga');
            $table->string('gambar')->nullable();
            $table->integer('jumlah_stok');
            $table->timestamps();

            // Menambahkan kunci asing
            $table->foreign('toko_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('barangs', function (Blueprint $table) {
            // Menghapus kunci asing
            $table->dropForeign(['toko_user_id']);
        });

        Schema::dropIfExists('barangs');
    }
};
