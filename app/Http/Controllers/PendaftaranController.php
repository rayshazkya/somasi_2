<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;

class PendaftaranController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:50',
            'telepon' => 'required|string|max:20',
            'email' => 'required|email|unique:pendaftar,email',
            'divisi' => 'required|string',
            'alasan' => 'required|string',
        ]);

        Pendaftar::create($request->all());

        return redirect('/#daftar')->with('success', 'Pendaftaran berhasil dikirim!');
    }
}
