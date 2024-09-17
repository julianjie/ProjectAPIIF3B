<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/fakultas',
[FakultasController::class,'index']);
Route::post('/fakultas/store',
[FakultasController::class,'store']);
Route::patch('/fakultas/{fakultas}',
[FakultasController::class,'update']);
Route::delete('/fakultas/{fakultas}',
[FakultasController::class,'destroy']);

Route::get('/prodi',
[ProdiController::class,'index']);
Route::post('/prodi/store',
[ProdiController::class,'store']);
Route::patch('/prodi/{prodis}',
[ProdiController::class,'update']);
Route::delete('/prodi/{prodis}',
[ProdiController::class,'destroy']);

Route::get('/mahasiswa',
[MahasiswaController::class,'index']);
Route::post('/mahasiswa',
[MahasiswaController::class,'store']);
Route::patch('/mahasiswa/{mahasiswa}',
[MahasiswaController::class,'update']);


