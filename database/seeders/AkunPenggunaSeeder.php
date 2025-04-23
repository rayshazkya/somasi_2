<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AkunPenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan beberapa data akun pengguna dengan nama orang
        DB::table('akun_pengguna')->insert([
            [
                'id_akun' => 2208107010027,
                'username' => 'Ahmad Fadli',  // Nama orang
                'password' => Hash::make('password123'),
                'role' => 'dph',
            ],
            [
                'id_akun' => 2208107010008,
                'username' => 'Citra Wulandari',  // Nama orang
                'password' => Hash::make('password456'),
                'role' => 'bendahara',
            ],
            [
                'id_akun' => 2208107010020,
                'username' => 'Budi Santoso',  // Nama orang
                'password' => Hash::make('password789'),
                'role' => 'ketua_divisi',
            ],
            [
                'id_akun' => 2208107010015,
                'username' => 'Doni Prasetyo',  // Nama orang
                'password' => Hash::make('password157'),
                'role' => 'ketua_divisi',
            ],
            [
                'id_akun' => 2308107010027,
                'username' => 'Erika Putri',  // Nama orang
                'password' => Hash::make('password101'),
                'role' => 'anggota_divisi',
            ],
            [
                'id_akun' => 2308107010033,
                'username' => 'Farhan Rizki',  // Nama orang
                'password' => Hash::make('password478'),
                'role' => 'anggota_divisi',
            ],
            [
                'id_akun' => 2208107010021,
                'username' => 'Gita Maharani',  // Nama orang
                'password' => Hash::make('password901'),
                'role' => 'anggota_divisi',
            ],
        ]);        
    }
}