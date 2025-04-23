<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan data anggota sesuai dengan akun pengguna dan divisi
        DB::table('anggota')->insert([
            // Anggota dengan role 'dph' (ketua_dph)
            [
                'id_anggota' => 2208107010027, // Menggunakan id_akun sebagai id_anggota
                'nama' => 'Ahmad Fadli',
                'email' => 'ahmad.fadli@email.com',
                'status_keanggotaan' => 'aktif',
                'id_divisi' => 0, // ID Divisi DPH (Dewan Pengurus Harian)
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Anggota dengan role 'bendahara'
            [
                'id_anggota' => 2208107010008,
                'nama' => 'Budi Santoso',
                'email' => 'budi.santoso@email.com',
                'status_keanggotaan' => 'aktif',
                'id_divisi' => 0, // ID Divisi DPH (Dewan Pengurus Harian)
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Anggota dengan role 'ketua_divisi'
            [
                'id_anggota' => 2208107010020,
                'nama' => 'Citra Wulandari',
                'email' => 'citra.wulandari@email.com',
                'status_keanggotaan' => 'aktif',
                'id_divisi' => 1, // ID Divisi PPM
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Anggota dengan role 'ketua_divisi'
            [
                'id_anggota' => 2208107010015,
                'nama' => 'Doni Prasetyo',
                'email' => 'doni.prasetyo@email.com',
                'status_keanggotaan' => 'aktif',
                'id_divisi' => 2, // ID Divisi KOMINKRAF
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Anggota dengan role 'anggota_divisi'
            [
                'id_anggota' => 2308107010027,
                'nama' => 'Erika Putri',
                'email' => 'erika.putri@email.com',
                'status_keanggotaan' => 'aktif',
                'id_divisi' => 3, // ID Divisi MBA
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Anggota dengan role 'anggota_divisi'
            [
                'id_anggota' => 2308107010033,
                'nama' => 'Farhan Rizki',
                'email' => 'farhan.rizki@email.com',
                'status_keanggotaan' => 'aktif',
                'id_divisi' => 4, // ID Divisi HUAL
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Anggota dengan role 'anggota_divisi'
            [
                'id_anggota' => 2208107010021,
                'nama' => 'Gita Maharani',
                'email' => 'gita.maharani@email.com',
                'status_keanggotaan' => 'aktif',
                'id_divisi' => 5, // ID Divisi PKM
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}