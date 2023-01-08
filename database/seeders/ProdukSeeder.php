<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::upsert([
            [
                'id' => 1,
                'produk_kategori_id' => 1,
                'toko_id' => 1,
                'nama' => 'Pensil',
                'kondisi' => 'Baru',
                'harga_jual' => 1000,
                'harga_beli' => 900,
                'jumlah' => 10,
                'deskripsi' => 'Pensil yang bagus',
                'alamat' => 'Jl. Raya',
                'gambar' => 'gambar1.jpg',
            ],
            [
                'id' => 2,
                'produk_kategori_id' => 1,
                'toko_id' => 2,
                'nama' => 'Penghapus',
                'kondisi' => 'Baru',
                'harga_jual' => 2000,
                'harga_beli' => 1800,
                'jumlah' => 20,
                'deskripsi' => 'Penghapus yang bagus',
                'alamat' => 'Jl. Raya',
                'gambar' => 'gambar2.jpg',
            ],
            [
                'id' => 3,
                'produk_kategori_id' => 3,
                'toko_id' => 3,
                'nama' => 'Apel',
                'kondisi' => 'Baru',
                'harga_jual' => 3000,
                'harga_beli' => 2700,
                'jumlah' => 30,
                'deskripsi' => 'Apel yang bagus',
                'alamat' => 'Jl. Raya',
                'gambar' => 'gambar3.jpg',
            ],
            [
                'id' => 4,
                'produk_kategori_id' => 2,
                'toko_id' => 4,
                'nama' => 'Jeruk',
                'kondisi' => 'Baru',
                'harga_jual' => 4000,
                'harga_beli' => 3600,
                'jumlah' => 40,
                'deskripsi' => 'Jeruk yang bagus',
                'alamat' => 'Jl. Raya',
                'gambar' => 'gambar4.jpg',
            ],
            [
                'id' => 5,
                'produk_kategori_id' => 3,
                'toko_id' => 1,
                'nama' => 'Sendok',
                'kondisi' => 'Baru',
                'harga_jual' => 5000,
                'harga_beli' => 3000,
                'jumlah' => 50,
                'deskripsi' => 'Sendok yang bagus',
                'alamat' => 'Jl. Raya',
                'gambar' => 'gambar5.jpg',
            ],
            [
                'id' => 6,
                'produk_kategori_id' => 3,
                'toko_id' => 2,
                'nama' => 'Garpu',
                'kondisi' => 'Baru',
                'harga_jual' => 6000,
                'harga_beli' => 4000,
                'jumlah' => 60,
                'deskripsi' => 'Garpu yang bagus',
                'alamat' => 'Jl. Raya',
                'gambar' => 'gambar6.jpg',
            ],
            [
                'id' => 7,
                'produk_kategori_id' => 4,
                'toko_id' => 3,
                'nama' => 'Paracetamol',
                'kondisi' => 'Baru',
                'harga_jual' => 7000,
                'harga_beli' => 6000,
                'jumlah' => 70,
                'deskripsi' => 'Paracetamol yang bagus',
                'alamat' => 'Jl. Raya',
                'gambar' => 'gambar7.jpg',
            ],
            [
                'id' => 8,
                'produk_kategori_id' => 4,
                'toko_id' => 4,
                'nama' => 'Panadol',
                'kondisi' => 'Baru',
                'harga_jual' => 8000,
                'harga_beli' => 7000,
                'jumlah' => 80,
                'deskripsi' => 'Panadol yang bagus',
                'alamat' => 'Jl. Raya',
                'gambar' => 'gambar8.jpg',
            ],
            [
                'id' => 9,
                'produk_kategori_id' => 2,
                'toko_id' => 1,
                'nama' => 'Pensil Murah',
                'kondisi' => 'Baru',
                'harga_jual' => 900,
                'harga_beli' => 800,
                'jumlah' => 10,
                'deskripsi' => 'Pensil yang bagus',
                'alamat' => 'Jl. Raya',
                'gambar' => 'gambar1.jpg',
            ],
            [
                'id' => 10,
                'produk_kategori_id' => 1,
                'toko_id' => 3,
                'nama' => 'Penghapus',
                'kondisi' => 'Baru',
                'harga_jual' => 2250,
                'harga_beli' => 2000,
                'jumlah' => 20,
                'deskripsi' => 'Penghapus yang bagus',
                'alamat' => 'Jl. Raya',
                'gambar' => 'gambar2.jpg',
            ],
            [
                'id' => 11,
                'produk_kategori_id' => 2,
                'toko_id' => 1,
                'nama' => 'Apel',
                'kondisi' => 'Baru',
                'harga_jual' => 7000,
                'harga_beli' => 6000,
                'jumlah' => 30,
                'deskripsi' => 'Apel yang bagus',
                'alamat' => 'Jl. Raya',
                'gambar' => 'gambar3.jpg',
            ],
            [
                'id' => 12,
                'produk_kategori_id' => 2,
                'toko_id' => 2,
                'nama' => 'Jeruk',
                'kondisi' => 'Baru',
                'harga_jual' => 3400,
                'harga_beli' => 3000,
                'jumlah' => 40,
                'deskripsi' => 'Jeruk yang bagus',
                'alamat' => 'Jl. Raya',
                'gambar' => 'gambar4.jpg',
            ],
            [
                'id' => 13,
                'produk_kategori_id' => 3,
                'toko_id' => 4,
                'nama' => 'Sendok Plastik',
                'kondisi' => 'Baru',
                'harga_jual' => 800,
                'harga_beli' => 700,
                'jumlah' => 50,
                'deskripsi' => 'Sendok yang bagus',
                'alamat' => 'Jl. Raya',
                'gambar' => 'gambar5.jpg',
            ],
            [
                'id' => 14,
                'produk_kategori_id' => 3,
                'toko_id' => 3,
                'nama' => 'Garpu',
                'kondisi' => 'Baru',
                'harga_jual' => 1400,
                'harga_beli' => 1200,
                'jumlah' => 60,
                'deskripsi' => 'Garpu yang bagus',
                'alamat' => 'Jl. Raya',
                'gambar' => 'gambar6.jpg',
            ],
            [
                'id' => 15,
                'produk_kategori_id' => 4,
                'toko_id' => 1,
                'nama' => 'Paracetamol',
                'kondisi' => 'Baru',
                'harga_jual' => 2500,
                'harga_beli' => 2000,
                'jumlah' => 70,
                'deskripsi' => 'Paracetamol yang bagus',
                'alamat' => 'Jl. Raya',
                'gambar' => 'gambar7.jpg',
            ],
            [
                'id' => 16,
                'produk_kategori_id' => 4,
                'toko_id' => 2,
                'nama' => 'Panadol',
                'kondisi' => 'Baru',
                'harga_jual' => 5500,
                'harga_beli' => 5000,
                'jumlah' => 80,
                'deskripsi' => 'Panadol yang bagus',
                'alamat' => 'Jl. Raya',
                'gambar' => 'gambar8.jpg',
            ],
        ], ['id'], ['produk_kategori_id', 'toko_id', 'nama', 'kondisi', 'harga_jual', 'harga_beli', 'jumlah', 'deskripsi', 'alamat', 'gambar']);
        //
    }
}