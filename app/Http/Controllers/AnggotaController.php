<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        return view('anggota.dashboard');
    }

    public function kalenderView()
    {
        return view('anggota.kalender');
    }

    public function keuanganView()
    {
        return view('anggota.keuangan');
    }

    public function dokumentasiView()
    {
        return view('anggota.dokumentasi');
    }

    public function pengaturanView()
    {
        $anggota = \App\Models\User::all();
        return view('anggota.pengaturan', compact('anggota'));
    }
}
