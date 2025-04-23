<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DokumentasiSeeder extends Seeder
{
    public function run()
    {
        DB::table('dokumentasi')->insert([
            [
                'nama_dokumen' => 'Notulen Rapat Bulanan April 2025',
                'jenis_dokumen' => 'PDF',
                'tanggal_upload' => Carbon::now(),
                'diunggah_oleh' => 2208107010027, // ID anggota yang mengunggah
                'id_kegiatan' => 1, // ID kegiatan yang berkaitan
            ],
            [
                'nama_dokumen' => 'Laporan Keuangan Triwulan I 2025',
                'jenis_dokumen' => 'Excel',
                'tanggal_upload' => Carbon::now(),
                'diunggah_oleh' => 2208107010008, // ID anggota yang mengunggah
                'id_kegiatan' => 2, // ID kegiatan yang berkaitan
            ],
        ]);
    }
}