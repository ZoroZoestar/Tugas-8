<?php

use App\Http\Controllers\MahasiswaController;

Route::get('/', fn() => redirect('/mahasiswa'));
Route::resource('/mahasiswa', MahasiswaController::class);

