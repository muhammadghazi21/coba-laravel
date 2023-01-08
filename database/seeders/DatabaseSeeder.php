<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'username' => 'muhghazi',
            'email' => 'ghazialghifari51@gmail.com',
            'password' => bcrypt('admin'),
            'type' => 1,
        ]);

        \App\Models\User::factory()->create([
            'username' => 'dany',
            'email' => 'dany@gmail.com',
            'password' => bcrypt('manager'),
            'type' => 2,
        ]);

        \App\Models\User::factory()->create([
            'username' => 'dicky',
            'email' => 'dicky@gmail.com',
            'password' => bcrypt('employee'),
            'type' => 3,
        ]);

        \App\Models\User::factory()->create([
            'username' => 'david',
            'email' => 'david@gmail.com',
            'password' => bcrypt('password'),
            'type' => 0,
        ]);
        \App\Models\User::factory(4)->create();

        $this->call([
            ProdukKategoriSeeder::class,
            TokoSeeder::class,
            ProdukSeeder::class,
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
