<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Buku;   
use App\Models\Anggota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
           'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);
        User::create([
           'name' => 'Pengguna Biasa',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user'),
            'role' => 'user',
            'email_verified_at' => now(),
        ]);
        Buku::factory(10)->create();
        Anggota::factory(10)->create();
    }
}
