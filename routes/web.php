<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/siswa', [SiswaController::class, 'index']);
