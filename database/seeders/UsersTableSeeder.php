<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Dph
        User::create([
            'name' => 'Glen Hakim',
            'email' => 'dph@example.com',
            'password' => Hash::make('password'),
            'role' => 'dph_role',
        ]);

        // Bendum
        User::create([
            'name' => 'Shopia Nurul Huda',
            'email' => 'bendahara@example.com',
            'password' => Hash::make('password'),
            'role' => 'bendahara_role',
        ]);

        // Kadiv
        User::create([
            'name' => 'M. Syahidal Akbar Zas',
            'email' => 'syahid22@mhs.usk.ac.id',
            'password' => Hash::make('password'),
            'role' => 'kadiv_role',
        ]);

        // Anggota
        User::create([
            'name' => 'Ade Riski',
            'email' => 'anggota@example.com',
            'password' => Hash::make('password'),
            'role' => 'anggota_role',
        ]);

        // ex
        User::create([
            'name' => 'Kadiv',
            'email' => 'kadiv@example.com',
            'password' => Hash::make('password'),
            'role' => 'kadiv_role',
        ]);
    }
}
