<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id()->unique();
            $table->foreignId('produk_kategori_id')->constrainred();
            $table->foreignId('toko_id')->constrained();
            $table->string('nama');
            $table->string('kondisi');
            $table->integer('harga_jual');
            $table->integer('harga_beli');
            $table->integer('jumlah');
            $table->string('deskripsi');
            $table->string('alamat');
            $table->string('gambar', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
};
