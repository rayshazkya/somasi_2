<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KetuaDivisiController extends Controller
{
    public function index()
    {
        return view('kadiv.dashboard');
    }

    public function kalenderView()
    {
        return view('kadiv.kalender');
    }

    public function keuanganView()
    {
        return view('kadiv.keuangan');
    }

    public function daftarDepartment()
    {
        return view('kadiv.department');
    }

    public function dokumentasiView()
    {
        return view('kadiv.dokumentasi');
    }

    public function pengaturanView()
    {
        $anggota = \App\Models\User::all();
        return view('kadiv.pengaturan', compact('anggota'));
    }
}
