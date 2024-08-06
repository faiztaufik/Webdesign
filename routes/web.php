<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\RawatController;
use App\Http\Controllers\ReservasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[Controller::class,'index']);
Route::get('/dokter_spesialis',[DokterController::class,'spesialis'])->name('dokter.spesialis');
Route::get('/dokter_umum',[DokterController::class,'umum'])->name('dokter.umum');
Route::get('/detail',[DokterController::class,'detail']);
Route::get('/rawat_inap',[RawatController::class,'inap'])->name('rawat.inap');
Route::get('/rawat_jalan',[RawatController::class,'jalan'])->name('rawat.jalan');
Route::get('/mitrakami',[MitraController::class,'mitra'])->name('mitra.kami');
Route::get('/reservasi',[ReservasiController::class,'reservasi']);
Route::get('/ongoing',[Controller::class,'ongoing']);
Route::get('/tentang',[Controller::class,'tentang']);