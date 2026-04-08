<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SiswaController;
use App\Http\Controllers\Api\KelasController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SekolahController;

Route::get('/test', function () {
    return response()->json(['message' => 'API jalan']);
});

Route::apiResource('siswa', SiswaController::class);
Route::apiResource('kelas', KelasController::class);
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/sekolah', [SekolahController::class, 'index']);
Route::post('/sekolah', [SekolahController::class, 'store']);
Route::get('/sekolah/{id}', [SekolahController::class, 'show']);