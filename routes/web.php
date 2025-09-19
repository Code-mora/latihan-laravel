<?php

use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa', [MahasiswaController:: class, 'index']);
Route::post('/mahasiswa', [MahasiswaController:: class, 'store']);
