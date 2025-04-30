<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('ketua.landingpage');
})->name('LandingPage');

Route::get('/ketuaDashboard', function () {
   return view('ketua.dashboard');
})->name('dashboard');

Route::get('/ketuaProfile', function () {
   return view('ketua.profile');
})->name('profile');

// Route::get('/LandingPage', function () {
//    return view('ketua.landingpage');
// })->name('LandingPage');

Route::get('/daftarAnggota', function () {
   return view('ketua.Anggota');
})->name('daftarAnggota');

Route::get('/login', function () {
   return view('ketua.login');
})->name('login');
