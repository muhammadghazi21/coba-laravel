<?php

namespace Database\Seeders;

use App\Models\ProdukKategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ProdukKategori::upsert([
            [
                'id' => 1,
                'nama' => 'Alat Tulis',
            ],
            [
                'id' => 2,
                'nama' => 'Buah',
            ],
            [
                'id' => 3,
                'nama' => 'Alat Dapur',
            ],
            [
                'id' => 4,
                'nama' => 'Obat',
            ],
        ], ['id'], ['nama']);
    }
}
