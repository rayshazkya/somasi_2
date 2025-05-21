<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DewanPerwakilanHarianController;
use App\Http\Controllers\BendaharaController;
use App\Http\Controllers\KetuaDivisiController;
use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\DaftarAnggotaController;

Route::post('/anggota', [DaftarAnggotaController::class, 'store'])->name('anggota.store');
// Route::post('/dph/anggota', [DewanPerwakilanHarianController::class, 'store'])->name('anggota.store');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');




Route::middleware('auth')->group(function () {
    // Redirect ke dashboard sesuai role
    Route::get('/dashboard', function () {
        $user = auth()->user();

        if ($user->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('dph_role')) {
            return redirect()->route('dph.dashboard');
        } elseif ($user->hasRole('bendahara_role')) {
            return redirect()->route('bendahara.dashboard');
        } elseif ($user->hasRole('kadiv_role')) {
            return redirect()->route('kadiv.dashboard');
        } else {
            return redirect()->route('anggota.dashboard');
        }
    })->name('dashboard');

    // Admin routes
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });

    // DPH routes
    Route::middleware(['role:dph_role'])->group(function () {
        Route::get('/dph/dashboard', [DewanPerwakilanHarianController::class, 'index'])->name('dph.dashboard');
    });

    Route::middleware(['role:dph_role'])->group(function () {
        Route::get('/dph/daftaranggota', [DewanPerwakilanHarianController::class, 'daftarAnggota'])->name('dph.daftaranggota');
    });

    Route::middleware(['role:dph_role'])->group(function () {
        Route::get('/dph/department', [DewanPerwakilanHarianController::class, 'daftarDepartment'])->name('dph.daftardepartment');
    });

    Route::middleware(['role:dph_role'])->group(function () {
        Route::get('/dph/kalender', [DewanPerwakilanHarianController::class, 'kalenderView'])->name('dph.kalender');
    });

    Route::middleware(['role:dph_role'])->group(function () {
        Route::get('/dph/keuangan', [DewanPerwakilanHarianController::class, 'keuanganView'])->name('dph.keuangan');
    });

    Route::middleware(['role:dph_role'])->group(function () {
        Route::get('/dph/dokumentasi', [DewanPerwakilanHarianController::class, 'dokumentasiView'])->name('dph.dokumentasi');
    });

    Route::middleware(['role:dph_role'])->group(function () {
        Route::get('/dph/pengaturan', [DewanPerwakilanHarianController::class, 'pengaturanView'])->name('dph.pengaturan');
    });

    Route::middleware(['role:dph_role'])->group(function () {
        Route::get('/dph/pendaftar', [DewanPerwakilanHarianController::class, 'pendaftar'])->name('dph.pendaftar');
    });


    // Bendahara routes
    Route::middleware(['role:bendahara_role'])->group(function () {
        Route::get('/bendahara/dashboard', [BendaharaController::class, 'index'])->name('bendahara.dashboard');
    });

    Route::middleware(['role:bendahara_role'])->group(function () {
        Route::get('/bendahara/department', [BendaharaController::class, 'daftarDepartment'])->name('bendahara.department');
    });
    Route::middleware(['role:bendahara_role'])->group(function () {
        Route::get('/bendahara/kalender', [BendaharaController::class, 'kalenderView'])->name('bendahara.kalender');
    });
    Route::middleware(['role:bendahara_role'])->group(function () {
        Route::get('/bendahara/keuangan', [BendaharaController::class, 'keuanganView'])->name('bendahara.keuangan');
    });
    Route::middleware(['role:bendahara_role'])->group(function () {
        Route::get('/bendahara/dokumentasi', [BendaharaController::class, 'dokumentasiView'])->name('bendahara.dokumentasi');
    });
    Route::middleware(['role:bendahara_role'])->group(function () {
        Route::get('/bendahara/pengaturan', [BendaharaController::class, 'pengaturanView'])->name('bendahara.pengaturan');
    });



    // Kadiv routes
    Route::middleware(['role:kadiv_role'])->group(function () {
        Route::get('/kadiv/dashboard', [KetuaDivisiController::class, 'index'])->name('kadiv.dashboard');
    });

    Route::middleware(['role:kadiv_role'])->group(function () {
        Route::get('/kadiv/department', [KetuaDivisiController::class, 'daftarDepartment'])->name('kadiv.department');
    });

    Route::middleware(['role:kadiv_role'])->group(function () {
        Route::get('/kadiv/keuangan', [KetuaDivisiController::class, 'keuanganView'])->name('kadiv.keuangan');
    });

    Route::middleware(['role:kadiv_role'])->group(function () {
        Route::get('/kadiv/kalender', [KetuaDivisiController::class, 'kalenderView'])->name('kadiv.kalender');
    });

    Route::middleware(['role:kadiv_role'])->group(function () {
        Route::get('/kadiv/dokumentasi', [KetuaDivisiController::class, 'dokumentasiView'])->name('kadiv.dokumentasi');
    });

    Route::middleware(['role:kadiv_role'])->group(function () {
        Route::get('/kadiv/pengaturan', [KetuaDivisiController::class, 'pengaturanView'])->name('kadiv.pengaturan');
    });


    // Anggota routes
    Route::middleware(['role:anggota_role'])->group(function () {
        Route::get('/anggota/dashboard', [AnggotaController::class, 'index'])->name('anggota.dashboard');
    });

    Route::middleware(['role:anggota_role'])->group(function () {
        Route::get('/anggota/kalender', [AnggotaController::class, 'kalenderView'])->name('anggota.kalender');
    });

    Route::middleware(['role:anggota_role'])->group(function () {
        Route::get('/anggota/keuangan', [AnggotaController::class, 'keuanganView'])->name('anggota.keuangan');
    });

    Route::middleware(['role:anggota_role'])->group(function () {
        Route::get('/anggota/dokumentasi', [AnggotaController::class, 'dokumentasiView'])->name('anggota.dokumentasi');
    });

    Route::middleware(['role:anggota_role'])->group(function () {
        Route::get('/anggota/pengaturan', [AnggotaController::class, 'pengaturanView'])->name('anggota.pengaturan');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
