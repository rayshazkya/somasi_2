<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    const STATUS_HADIR = 'hadir';
    const STATUS_IZIN = 'izin';
    const STATUS_ALPHA = 'alpha';
    protected $table = 'kehadiran';
    protected $primaryKey = 'id_kehadiran';

    protected $fillable = [
        'id_anggota', 'id_kegiatan', 'status_kehadiran',
    ];

    // Relasi ke Anggota
    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }

    // Relasi ke Kegiatan
    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'id_kegiatan');
    }
}