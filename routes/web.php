<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiswaController::class, 'indexFE']);
Route::get('/admin/siswa', [SiswaController::class, 'index']);
Route::delete('/admin/siswa', [SiswaController::class, 'deleteAll']);
Route::post('/admin/siswa/tambah', [SiswaController::class, 'create']);
Route::get('/admin/siswa/tambah', [SiswaController::class, 'createView']);
Route::delete('/admin/siswa/{id}', [SiswaController::class, 'delete']);
Route::get('/admin/siswa/{id}', [SiswaController::class, 'updateView']);
Route::put('/admin/siswa/{id}', [SiswaController::class, 'update']);
