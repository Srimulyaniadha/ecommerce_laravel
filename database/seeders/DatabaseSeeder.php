<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Skripsi;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

      /*  User::create([
            'name' => 'user1',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456789'),
            'point' => 10000,
        ]);

        Admin::create([
            'name' => 'admin',
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
*/
        Skripsi::create([
            'judul' => 'Pengaruh Penjualan Risol Mayo di Era Digital',
            'nama' => 'Sri Mulyani Adha',
            'nim' => '6304221502',
            'angkatan' => '2022',
            'dosenpembimbing1' => 'Fajri Profesio, M.Kom',
            'dosenpembimbing2' => 'Lidya Wati, M.Kom',
        ]);
       
    }
}
