<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anggota;

class AnggotaSeeder extends Seeder
{

public function run()
{
    $anggota = [
        ['nama' => 'Alfi Zamriza', 'npm' => '345321231', 'divisi' => 'Design', 'jabatan' => 'Ketua Divisi', 'type' => 'Office', 'status' => 'Aktif'],
        ['nama' => 'Athar Rayyan Muhammad', 'npm' => '453367122', 'divisi' => 'Sales', 'jabatan' => 'Sekretaris Divisi', 'type' => 'Office', 'status' => 'Aktif'],
        ['nama' => 'T. Farhan Syah', 'npm' => '345321232', 'divisi' => 'Sales', 'jabatan' => 'Ketua Divisi', 'type' => 'Remote', 'status' => 'Aktif'],
        ['nama' => 'Azzariyat Azra', 'npm' => '453677881', 'divisi' => 'Design', 'jabatan' => 'Design Lead', 'type' => 'Office', 'status' => 'Aktif'],
        ['nama' => 'M. Milan Ramadhan', 'npm' => '009918765', 'divisi' => 'Development', 'jabatan' => 'Wakil Ketua', 'type' => 'Remote', 'status' => 'Aktif'],
        ['nama' => 'Farhanul Khair', 'npm' => '238870122', 'divisi' => 'Development', 'jabatan' => 'Ketua Divisi', 'type' => 'Remote', 'status' => 'Aktif'],
        ['nama' => 'Dwi Hamdan Syukran', 'npm' => '124335111', 'divisi' => 'PM', 'jabatan' => 'Project Manager', 'type' => 'Office', 'status' => 'Aktif'],
        ['nama' => 'Widya Sukma Putri', 'npm' => '435540099', 'divisi' => 'HR', 'jabatan' => 'HR Executive', 'type' => 'Office', 'status' => 'Aktif'],
        ['nama' => 'Hidayat Nur Hakim', 'npm' => '009812890', 'divisi' => 'Development', 'jabatan' => 'Ketua Divisi', 'type' => 'Office', 'status' => 'Aktif'],
        ['nama' => 'Dian Islami', 'npm' => '671190345', 'divisi' => 'Development', 'jabatan' => 'Wakil Ketua', 'type' => 'Office', 'status' => 'Aktif'],
        ['nama' => 'Della Rahmatika', 'npm' => '091233412', 'divisi' => 'BA', 'jabatan' => 'Business Analyst', 'type' => 'Remote', 'status' => 'Aktif'],
        ['nama' => 'Raka Permadi', 'npm' => '984732109', 'divisi' => 'QA', 'jabatan' => 'QA Engineer', 'type' => 'Remote', 'status' => 'Aktif'],
        ['nama' => 'Intan Marwah', 'npm' => '561209873', 'divisi' => 'PM', 'jabatan' => 'Scrum Master', 'type' => 'Office', 'status' => 'Aktif'],
        ['nama' => 'Andika Ramadhan', 'npm' => '341233455', 'divisi' => 'Design', 'jabatan' => 'UX Designer', 'type' => 'Remote', 'status' => 'Aktif'],
        ['nama' => 'Syifa Amalia', 'npm' => '876231009', 'divisi' => 'HR', 'jabatan' => 'Recruiter', 'type' => 'Office', 'status' => 'Aktif'],
    ];

    foreach ($anggota as $data) {
        Anggota::create($data);
    }
}

    
}
