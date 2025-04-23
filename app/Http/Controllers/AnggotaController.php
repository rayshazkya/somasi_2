<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function index() {
        return Anggota::all();
    }

    public function store(Request $request) {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:20',
            'divisi' => 'nullable|string|max:100',
            'jabatan' => 'nullable|string|max:100',
            'type' => 'required|string',
            'status' => 'required|string',
        ]);
        return Anggota::create($data);
    }

    public function destroy($id) {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}
