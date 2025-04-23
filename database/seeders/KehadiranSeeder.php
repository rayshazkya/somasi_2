<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kehadiran;
use App\Models\Kegiatan;

class KehadiranSeeder extends Seeder
{
    public function run()
    {
        // Ambil ID kegiatan berdasarkan nama
        $idKegiatanRapat = Kegiatan::where('nama_kegiatan', 'Rapat Bulanan')->value('id_kegiatan');
        $idKegiatanWorkshop = Kegiatan::where('nama_kegiatan', 'Workshop Laravel')->value('id_kegiatan');

        // Insert data kehadiran
        Kehadiran::insert([
            [
                'id_anggota' => 2208107010027, // Ahmad Fadli
                'id_kegiatan' => $idKegiatanRapat,
                'status_kehadiran' => Kehadiran::STATUS_HADIR,
            ],
            [
                'id_anggota' => 2208107010008, // Budi Santoso
                'id_kegiatan' => $idKegiatanRapat,
                'status_kehadiran' => Kehadiran::STATUS_IZIN,
            ],
            [
                'id_anggota' => 2308107010027, // Erika Putri
                'id_kegiatan' => $idKegiatanWorkshop,
                'status_kehadiran' => Kehadiran::STATUS_ALPHA,
            ],
            [
                'id_anggota' => 2308107010033, // Farhan Rizki
                'id_kegiatan' => $idKegiatanWorkshop,
                'status_kehadiran' => Kehadiran::STATUS_HADIR,
            ],
        ]);
    }
}