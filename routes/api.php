<?php

use App\Http\Controllers\AnggotaController;

Route::get('/anggota', [AnggotaController::class, 'index']);
Route::post('/anggota', [AnggotaController::class, 'store']);
Route::delete('/anggota/{id}', [AnggotaController::class, 'destroy']);
