<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    protected $table = 'keuangan'; // Nama tabel jika berbeda dengan plural model
    protected $primaryKey = 'id_transaksi'; // Tentukan primary key jika berbeda
    protected $fillable = [
        'tanggal', 'jenis_transaksi', 'jumlah', 'deskripsi', 'dicatat_oleh'
    ];

    // Relasi dengan Anggota (dicatat_oleh adalah FK ke Anggota)
    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'dicatat_oleh', 'id_anggota');
    }
}