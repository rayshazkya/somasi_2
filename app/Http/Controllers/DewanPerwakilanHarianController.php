<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Controllers\DaftarAnggotaController;
use App\Models\DaftarAnggota;
use Illuminate\Support\Facades\Validator;

class DewanPerwakilanHarianController extends Controller
{
    public function index()
    {
        return view('dph.dashboard');
    }

    public function daftarAnggota()
    {
        $anggota = \App\Models\DaftarAnggota::all();

        return view('dph.daftaranggota', compact('anggota'));
    }

    public function pendaftar()
    {
        $anggota = \App\Models\Pendaftar::all();
        return view('dph.pendaftar', compact('anggota'));
    }


    public function daftarDepartment()
    {
        return view('dph.department');
    }

    public function kalenderView()
    {
        return view('dph.kalender');
    }

    public function keuanganView()
    {
        return view('dph.keuangan');
    }

    public function dokumentasiView()
    {
        return view('dph.dokumentasi');
    }

    public function pengaturanView()
    {
        $anggota = \App\Models\User::all();
        return view('dph.pengaturan', compact('anggota'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'divisi' => 'required|string|max:100',
            'role' => 'required|string|max:100',
            'status' => 'required|in:active,non_active',
            'avatar' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        // In a real application, you would save the data to the database here
        // For example:
        // $anggota = new Anggota();
        // $anggota->nama = $request->nama;
        // $anggota->npm = $request->npm;
        // $anggota->divisi = $request->divisi;
        // $anggota->role = $request->role;
        // $anggota->status = $request->status;
        // $anggota->avatar = $request->avatar ?? 'https://ui-avatars.com/api/?name=' . urlencode($request->nama) . '&background=random';
        // $anggota->save();

        // For this example, we'll just return a success response
        return response()->json([
            'success' => true,
            'message' => 'Anggota berhasil ditambahkan',
            'data' => $request->all()
        ]);
    }
}
