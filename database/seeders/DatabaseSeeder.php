<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AkunPenggunaSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AkunPenggunaSeeder::class,
            DivisiSeeder::class,
            AnggotaSeeder::class,
            KegiatanSeeder::class,
            KehadiranSeeder::class,
            DokumentasiSeeder::class, 
            KeuanganSeeder::class,
        ]);
    }
}