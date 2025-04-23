<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class KegiatanSeeder extends Seeder
{
    public function run()
    {
        DB::table('kegiatan')->insert([
            [
                'nama_kegiatan' => 'Workshop Laravel',
                'tanggal' => '2025-05-01',
                'status_kegiatan' => 'Terjadwal',
                'id_divisi' => 1,
                'deskripsi' => 'Pelatihan Laravel untuk anggota divisi teknologi informasi.'
            ],
            [
                'nama_kegiatan' => 'Rapat Bulanan',
                'tanggal' => '2025-05-05',
                'status_kegiatan' => 'Terjadwal',
                'id_divisi' => 2,
                'deskripsi' => 'Rapat evaluasi dan perencanaan kegiatan divisi.'
            ],
        ]);
    }
}
