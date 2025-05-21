<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $fillable = ['nama', 'npm', 'telepon', 'email', 'divisi', 'alasan'];
    protected $table = 'pendaftar';
}
