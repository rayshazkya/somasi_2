<?php

namespace App\Http\Controllers;

use App\Models\DaftarAnggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DaftarAnggotaController extends Controller
{
    public function index()
    {
        // $anggota = \App\Models\DaftarAnggota::all();
        return view('dph.daftaranggota', compact('anggota'));
    }

    /**
     * Store a newly created resource in storage.
     */
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

    public function edit($id)
    {
        $anggota = DaftarAnggota::findOrFail($id);
        return view('dph.editanggota', compact('anggota'));
    }

    public function update(Request $request, $id)
    {
        $anggota = DaftarAnggota::findOrFail($id);
        $anggota->update($request->all());

        return redirect()->route('dph.daftaranggota')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy($id)
    {
        DaftarAnggota::destroy($id);
        return redirect()->route('dph.daftaranggota')->with('success', 'Data berhasil dihapus.');
    }
}
