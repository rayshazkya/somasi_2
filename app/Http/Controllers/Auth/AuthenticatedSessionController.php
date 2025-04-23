<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Menampilkan halaman login
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Menangani permintaan otentikasi masuk
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi untuk ID Akun dan Password
        $request->validate([
            'id_akun' => ['required', 'exists:akun_pengguna,id_akun'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        // Proses login dengan ID Akun
        if (Auth::attempt([
            'id_akun' => $request->id_akun,
            'password' => $request->password,
        ], $request->filled('remember'))) {
            $request->session()->regenerate();

            // Redirect ke halaman yang sesuai dengan role (misalnya Dashboard Ketua)
            return redirect()->intended(route('dashboard'));
        }

        // Jika login gagal
        return back()->withErrors([
            'id_akun' => __('auth.failed'),
        ]);
    }

    /**
     * Menghapus sesi otentikasi
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}