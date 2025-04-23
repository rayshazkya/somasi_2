<?php

use Illuminate\Support\Facades\Route;

Route::get('/ketuaDashboard', function () {
    return view('ketua.dashboard');
 })->name('dashboard');

 Route::get('/ketuaProfile', function () {
    return view('ketua.profile');
 })->name('profile');

 Route::get('/LandingPage', function () {
   return view('ketua.landingpage');
})->name('LandingPage');

