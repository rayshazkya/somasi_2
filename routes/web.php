<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

// Halaman utama: redirect ke login jika belum login
Route::get('/', function () {
    return redirect()->route('login');
});

// Rute login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');

// Logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');

// Rute dashboard (hanya bisa diakses jika sudah login)
Route::get('/dashboard', function () {
    return view('ketua.dashboard');
})->middleware(['auth'])->name('dashboard');

// Rute untuk mengelola profil pengguna (hanya bisa diakses setelah login)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Menyertakan rute-rute otentikasi lain (biasanya otomatis dengan Laravel)
require __DIR__.'/auth.php';