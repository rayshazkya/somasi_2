<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Anggota;  // Pastikan untuk import model Anggota
use App\Models\Divisi;   // Pastikan untuk import model Divisi

class AkunPengguna extends Authenticatable
{
    protected $table = 'akun_pengguna';
    protected $primaryKey = 'id_akun';

    protected $fillable = [
        'username',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
    ];

    public $timestamps = true;

    // Relasi dengan Anggota
    public function anggota()
    {
        return $this->hasOne(Anggota::class, 'id_akun', 'id_akun');
    }

    // Relasi dengan Divisi melalui Anggota
    public function divisi()
    {
        return $this->hasOneThrough(Divisi::class, Anggota::class, 'id_akun', 'id_divisi', 'id_akun', 'id_divisi');
    }
}