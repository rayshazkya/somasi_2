<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    protected $table = 'dokumentasi'; // Nama tabel
    protected $primaryKey = 'id_dokumen'; // Tentukan primary key jika berbeda
    protected $fillable = [
        'nama_dokumen', 'jenis_dokumen', 'tanggal_upload', 'diunggah_oleh', 'id_kegiatan'
    ];

    // Relasi dengan Anggota (diunggah_oleh adalah FK ke Anggota)
    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'diunggah_oleh', 'id_anggota');
    }

    // Relasi dengan Kegiatan
    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'id_kegiatan', 'id_kegiatan');
    }

    // Relasi dengan Dokumentasi
    public function diunggahOleh()
    {
        return $this->belongsTo(Anggota::class, 'diunggah_oleh');
    }
}