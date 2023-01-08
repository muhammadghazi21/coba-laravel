<?php

namespace Database\Seeders;

use App\Models\Toko;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Toko::upsert([
            [
                'id' => 1,
                'nama' => 'Yokopedia',
                'alamat' => 'Jl. Raya',
            ],
            [
                'id' => 2,
                'nama' => 'Shoppo',
                'alamat' => 'Jl. Raya',
            ],
            [
                'id' => 3,
                'nama' => 'Amazing',
                'alamat' => 'Jl. Raya',
            ],
            [
                'id' => 4,
                'nama' => 'Alibobo',
                'alamat' => 'Jl. Raya',
            ],
        ], ['id'], ['nama', 'alamat']);
    }
}
