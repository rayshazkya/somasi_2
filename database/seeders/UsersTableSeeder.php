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

        // Kepala Sekolah
        User::create([
            'name' => 'Kepala Sekolah',
            'email' => 'kepsek@example.com',
            'password' => Hash::make('password'),
            'role' => 'kepala_sekolah',
        ]);

        // Wakil Kurikulum
        User::create([
            'name' => 'Wakil Kurikulum',
            'email' => 'wakur@example.com',
            'password' => Hash::make('password'),
            'role' => 'wakil_kurikulum',
        ]);

        // Guru
        User::create([
            'name' => 'Guru',
            'email' => 'guru@example.com',
            'password' => Hash::make('password'),
            'role' => 'guru',
        ]);

        // Siswa
        User::create([
            'name' => 'Siswa',
            'email' => 'siswa@example.com',
            'password' => Hash::make('password'),
            'role' => 'siswa',
        ]);
    }
}