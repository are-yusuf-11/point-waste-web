<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// 🏠 KELOMPOK HAK AKSES: WARGA
Route::middleware(['auth', 'role_check'])->prefix('warga')->name('warga.')->group(function () {
    Route::get('/dashboard', [WargaDashboardController::class, 'index'])->name('dashboard');
    // ... rute warga lainnya tinggal dimasukkan ke sini
});

// 👥 KELOMPOK HAK AKSES: PENGURUS RT
Route::middleware(['auth', 'role_check'])->prefix('pengurus-rt')->name('pengurus_rt.')->group(function () {
    Route::get('/', [PengurusRtController::class, 'index'])->name('index');
    // ... rute RT lainnya tinggal dimasukkan ke sini
});

// 🅰️ KELOMPOK HAK AKSES: ADMIN SISTEM
Route::middleware(['auth', 'role_check'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    // ... rute admin lainnya tinggal dimasukkan ke sini
});