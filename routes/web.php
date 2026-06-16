<?php

use Illuminate\Support\Facades\Route;

// 1. IMPORT CONTROLLER UMUM / AUTH (Di luar folder aktor)
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

// 2. IMPORT CONTROLLER KHUSUS AKTOR: WARGA (Sesuai image_faada9.png)
use App\Http\Controllers\Warga\WargaDashboardController;
use App\Http\Controllers\Warga\SetorSampahController;
use App\Http\Controllers\Warga\IuranWargaController;
use App\Http\Controllers\Warga\ProfileController as WargaProfileController; // Di-alias jika ada nama yang kembar

// 3. IMPORT CONTROLLER KHUSUS AKTOR: PENGURUS RT
// use App\Http\Controllers\PengurusRT\PengurusDashboardController;

// 4. IMPORT CONTROLLER KHUSUS AKTOR: ADMIN
// use App\Http\Controllers\Admin\AdminDashboardController;


// =========================================================
// ROUTE PUBLIC (Tidak Butuh Login)
// =========================================================
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);


// =========================================================
// ROUTE GLOBAL AUTH ONLY
// =========================================================
Route::middleware(['auth', 'check_role'])->group(function () {
    
    // Fitur umum yang bisa diakses semua aktor setelah login
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::put('/profile', [ProfileController::class, 'update']);
    Route::get('/password/ganti', [ProfileController::class, 'editPassword']);
    Route::put('/password/ganti', [ProfileController::class, 'updatePassword']);

    // -----------------------------------------------------
    // PANEL AKTOR: WARGA (Prefix: warga)
    // -----------------------------------------------------
    Route::prefix('warga')->group(function () {
        Route::get('/dashboard', [WargaDashboardController::class, 'index'])->name('warga.dashboard');
        Route::get('/setor-sampah/riwayat', [SetorSampahController::class, 'index']);
        Route::post('/setor-sampah', [SetorSampahController::class, 'store']);
        Route::get('/iuran', [IuranWargaController::class, 'index']);
        Route::post('/iuran/tukar-poin', [IuranWargaController::class, 'tukarPoin']);
    });

    // -----------------------------------------------------
    // PANEL AKTOR: PENGURUS RT (Prefix: pengurus-rt)
    // -----------------------------------------------------
    Route::prefix('pengurus-rt')->group(function () {
        // Route::get('/dashboard', [PengurusDashboardController::class, 'index'])->name('pengurus_rt.index');
    });

    // -----------------------------------------------------
    // PANEL AKTOR: ADMIN (Prefix: admin)
    // -----------------------------------------------------
    Route::prefix('admin')->group(function () {
        // Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.index');
    });
});