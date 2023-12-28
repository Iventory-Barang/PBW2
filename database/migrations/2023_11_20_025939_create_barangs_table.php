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
            $table->unsignedBigInteger('toko_user_id'); // Kolom toko_user_id sebagai kunci asing
            $table->string('nama_barang');
            $table->decimal('harga', 10, 2);
            $table->string('gambar')->nullable();
            $table->integer('jumlah_stok');
            $table->timestamps();

            $table->foreign('toko_user_id')
                ->references('id')
                ->on('toko_users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('barangs', function (Blueprint $table) {
            $table->dropForeign(['toko_user_id']);
        });

        Schema::dropIfExists('barangs');
    }
};
