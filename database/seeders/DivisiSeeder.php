<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('divisi')->insert([
            [
                'id_divisi' => 0,
                'nama_divisi' => 'DPH',
                'deskripsi_divisi' => 'Dewan Pengurus Harian (DPH) yang terdiri dari ketua umum dan bendahara.',
            ],
            [
                'id_divisi' => 1,
                'nama_divisi' => 'Divisi PPM',
                'deskripsi_divisi' => 'Departemen Penelitian dan Pengembangan Mahasiswa adalah departemen yang berfungsi
untuk pengembangan kemampuan dan penalaran mahasiswa Jurusan Informatika.',
            ],
            [
                'id_divisi' => 2,
                'nama_divisi' => 'Divisi KOMINKRAF',
                'deskripsi_divisi' => 'Departemen Komunikasi, Informasi dan Perencanaan Kreativitas adalah departemen yang
berperan untuk memberikan informasi terhadap internal dan eksternal himpunan maupun
kalangan mahasiswa Jurusan Informatika dan masyarakat luas pada umumnya melalui media
online maupun offline.',
            ],
            [
                'id_divisi' => 3,
                'nama_divisi' => 'Divisi MBA',
                'deskripsi_divisi' => 'Departemen Minat Bakat dan Apresiasi (MBA) adalah departemen yang berperan sebagai wadah
mahasiswa untuk menyalurkan dan mengembangkan bakat pengurus Himpunan Mahasiswa
Informatika terutama dalam bidang olahraga, seni tari, dan seni musik.',
            ],
            [
                'id_divisi' => 4,
                'nama_divisi' => 'Divisi HUAL',
                'deskripsi_divisi' => 'Departemen Hubungan Antar Lembaga (HUAL) merupakan departemen yang bertugas untuk
menjaga dan memperluas jaringan dengan berbagai lembaga-lembaga baik dalam lingkup
eksternal maupun internal di Jurusan Informatika USK.',
            ],
            [
                'id_divisi' => 5,
                'nama_divisi' => 'Divisi PKM',
                'deskripsi_divisi' => 'Departemen Pengelolaan Kesejahteraan Mahasiswa adalah departemen yang berfungsi untuk
meningkatkan potensi, kreativitas, dan memperjuangkan hak-hak maupun aspirasi
mahasiswa-mahasiswi Informatika, mampu mensinergikan antara mahasiswa dan birokrasi
untuk mencapai tujuan tertentu.',
            ],
            [
                'id_divisi' => 6,
                'nama_divisi' => 'Divisi ADM dan Inventaris',
                'deskripsi_divisi' => 'Departemen ADM dan Inventaris merupakan departemen yang berperan dalam segala hal
tentang administrasi khususnya menangani pelaksanaan dan pengawasan tata tertib
administrasi Himpunan Mahasiswa Informatika.',
            ],
            [
                'id_divisi' => 7,
                'nama_divisi' => 'Divisi KEAGAMAAN',
                'deskripsi_divisi' => 'Departemen Keagamaan merupakan departemen yang membidangi aspek keagamaan.',
            ],
            [
                'id_divisi' => 8,
                'nama_divisi' => 'Divisi SOSMAS',
                'deskripsi_divisi' => 'Departemen Sosial Masyarakat merupakan departemen yang bertugas dalam hal sosial dan
pengabdian masyarakat baik dalam isu-isu sosial maupun kebencanaan.',
            ],
        ]);
    }
}