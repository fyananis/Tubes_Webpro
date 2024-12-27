<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\dokterAdminController;
use App\Http\Controllers\DaftarController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dokter', [dokterAdminController::class, 'index'])->name('dokterAdmin.index');
Route::get('/dokter/create', [dokterAdminController::class, 'create'])->name('dokterAdmin.create');
Route::post('/dokter', [dokterAdminController::class, 'store'])->name('dokterAdmin.store');
Route::get('/dokter/{id}/edit', [dokterAdminController::class, 'edit'])->name('dokterAdmin.edit');
Route::put('/dokter/{id}', [dokterAdminController::class, 'update'])->name('dokterAdmin.update');
Route::delete('/dokter/{id}', [dokterAdminController::class, 'destroy'])->name('dokterAdmin.destroy');

Route::get('/daftar',[DaftarController::class,'index']);
Route::get('/daftar/pasien/baru',[DaftarController::class,'pasienBaru']);
Route::post('/daftar/pasien/baru',[DaftarController::class,'storePasienBaru']);
Route::get('/antrian',[DaftarController::class,'antrian']);
Route::get('/daftar/pasien/lama',[DaftarController::class,'pasienLama']);
Route::post('/daftar/pasien/lama',[DaftarController::class,'pasienLamaStore']);
