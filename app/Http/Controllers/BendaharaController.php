<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BendaharaController extends Controller
{
    public function index()
    {
        return view('bendahara.dashboard');
    }



    public function daftarDepartment()
    {
        return view('bendahara.department');
    }

    public function kalenderView()
    {
        return view('bendahara.kalender');
    }

    public function keuanganView()
    {
        return view('bendahara.keuangan');
    }

    public function dokumentasiView()
    {
        return view('bendahara.dokumentasi');
    }

    public function pengaturanView()
    {
        $anggota = \App\Models\User::all();
        return view('bendahara.pengaturan', compact('anggota'));
    }
}
