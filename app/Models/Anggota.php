<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';

    protected $fillable = [
        'id_anggota', 'id_divisi', 'status_keanggotaan'
    ];

    // Relasi dengan AkunPengguna
    public function akunPengguna()
    {
        return $this->belongsTo(AkunPengguna::class, 'id_anggota', 'id_akun');
    }

    // Relasi dengan Divisi
    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'id_divisi', 'id_divisi');
    }

    // Relasi dengan Kehadiran
    public function kehadiran()
    {
        return $this->hasMany(Kehadiran::class, 'id_anggota');
    }

    // Relasi dengan Dokumentasi
    public function dokumentasiDiunggah()
    {
        return $this->hasMany(Dokumentasi::class, 'diunggah_oleh');
    }

}