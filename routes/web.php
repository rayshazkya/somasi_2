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

Route::get('/lupaPassword', function () {
   return view('ketua.lupapass');
})->name('lupaPassword');

Route::get('/otp', function () {
   return view('ketua.otp'); 
})->name('otp');

Route::get('/ubahPassword', function () {
   return view('ketua.ubahpass'); 
})->name('ubahPassword');
