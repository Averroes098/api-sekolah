<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SiswaController;
use App\Http\Controllers\Api\KelasController;

Route::get('/test', function () {
    return response()->json(['message' => 'API jalan']);
});

Route::apiResource('siswa', SiswaController::class);
Route::apiResource('kelas', KelasController::class);