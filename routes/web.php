<?php

use App\Http\Controllers\MatkulController;

Route::get('/matkul', [MatkulController:: class, 'index']);
Route::post('/matkul', [MatkulController:: class, 'store']);
