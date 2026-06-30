<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\AdminController;

// Halaman utama Login (Berdasarkan n_login di flowchart)
Route::get('/', function () {
    return view('welcome'); // Buat form login standar di sini jika diperlukan
});

Route::get('petani', function () {
    return view('petani'); // Buat form login standar di sini jika diperlukan
});


Route::get('/dashboard/petani', [PetaniController::class, 'index'])->name('petani.dashboard');
// Middleware auth digunakan untuk memastikan pengguna sudah login (n_dec_login)
Route::middleware(['auth'])->group(function () {

    // Alur Rute untuk Petani (P1 - P6)
    Route::get('/dashboard/petani', [PetaniController::class, 'index'])->name('petani.dashboard');
    Route::post('/petani/daftar', [PetaniController::class, 'storePendaftaran']);
    Route::post('/petani/panen', [PetaniController::class, 'storePanen']);

    // Alur Rute untuk Pengurus Kelompok Tani (A1 - A15)
    Route::get('/dashboard/pengurus', [PengurusController::class, 'index'])->name('pengurus.dashboard');
    Route::post('/pengurus/verifikasi/{id}', [PengurusController::class, 'verifikasiPanen']);
    Route::post('/pengurus/distribusi', [PengurusController::class, 'prosesDistribusi']);

    // Alur Rute untuk Admin Sistem (S1 - S3)
    Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});