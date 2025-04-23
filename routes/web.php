<?php

use Illuminate\Support\Facades\Route;

Route::get('/ketuaDashboard', function () {
    return view('ketua.dashboard');
 })->name('dashboard');