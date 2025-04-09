<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KepalaSekolahController;
use App\Http\Controllers\WakilKurikulumController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    // Redirect ke dashboard sesuai role
    Route::get('/dashboard', function () {
        $user = auth()->user();
        
        if ($user->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('kepala_sekolah')) {
            return redirect()->route('kepsek.dashboard');
        } elseif ($user->hasRole('wakil_kurikulum')) {
            return redirect()->route('wakur.dashboard');
        } elseif ($user->hasRole('guru')) {
            return redirect()->route('guru.dashboard');
        } else {
            return redirect()->route('siswa.dashboard');
        }
    })->name('dashboard');
    
    // Admin routes
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });
    
    // Kepala Sekolah routes
    Route::middleware(['role:kepala_sekolah'])->group(function () {
        Route::get('/kepsek/dashboard', [KepalaSekolahController::class, 'index'])->name('kepsek.dashboard');
    });
    
    // Wakil Kurikulum routes
    Route::middleware(['role:wakil_kurikulum'])->group(function () {
        Route::get('/wakur/dashboard', [WakilKurikulumController::class, 'index'])->name('wakur.dashboard');
    });
    
    // Guru routes
    Route::middleware(['role:guru'])->group(function () {
        Route::get('/guru/dashboard', [GuruController::class, 'index'])->name('guru.dashboard');
    });
    
    // Siswa routes
    Route::middleware(['role:siswa'])->group(function () {
        Route::get('/siswa/dashboard', [SiswaController::class, 'index'])->name('siswa.dashboard');
    });
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';