<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    protected $primaryKey = 'id_kegiatan';

    protected $fillable = [
        'nama_kegiatan', 'tanggal', 'status_kegiatan', 'id_divisi', 'deskripsi',
    ];

    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'id_divisi');
    }

    public function kehadiran()
    {
        return $this->hasMany(Kehadiran::class, 'id_kegiatan');
    }

    public function dokumentasi()
    {
        return $this->hasMany(Dokumentasi::class, 'id_kegiatan');
    }

}

