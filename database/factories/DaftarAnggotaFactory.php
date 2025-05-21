<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DaftarAnggota>
 */
// database/factories/DaftarAnggotaFactory.php


use App\Models\DaftarAnggota;


class DaftarAnggotaFactory extends Factory
{
    protected $model = DaftarAnggota::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'npm' => $this->faker->numerify('22###########'),
            'divisi' => $this->faker->randomElement(['Keagamaan', 'Kominkraf', 'Sosmas', 'Kestari', 'PPM', 'PKM']),
            'role' => $this->faker->randomElement(['anggota_role', 'kadiv_role', 'dph_role']),
            'status' => $this->faker->randomElement(['active', 'non_active']),
            'avatar' => 'https://i.pravatar.cc/100?img=' . rand(1, 70),
        ];
    }
}
