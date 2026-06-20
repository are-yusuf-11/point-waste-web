<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Warga\WargaDashboardController;
use App\Http\Controllers\Warga\SetorSampahController;
use App\Http\Controllers\Warga\IuranWargaController;
use App\Http\Controllers\Warga\MutasiPoinController;
use App\Http\Controllers\Warga\ProfileWargaController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\PengurusRT\PengurusDashboardController;

// =========================================================
// ROUTE PUBLIC (Tidak Butuh Login)
// =========================================================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
Route::get('/register', [AuthController::class, 'showRegister'])->name('showRegister');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Route uji coba untuk melihat tampilan Mutasi Poin Warga
Route::get('/mutasi-poin-test', function () {
    return view('warga.mutasi-poin'); // Mengarah ke resources/views/warga/mutasi-poin.blade.php
});

// =========================================================
// ROUTE GLOBAL AUTH ONLY
// =========================================================
Route::middleware(['auth', 'check_role'])->group(function () {
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::put('/profile', [ProfileController::class, 'update']);

    // PANEL AKTOR: WARGA
    Route::prefix('warga')->group(function () {
        Route::get('/dashboard', [WargaDashboardController::class, 'index'])->name('warga.dashboard');
        Route::get('/setor-sampah', [SetorSampahController::class, 'index'])->name('warga.setor-sampah');
        Route::post('/setor-sampah', [SetorSampahController::class, 'store'])->name('warga.setor-sampah.store');
        Route::get('/mutasi-poin', [MutasiPoinController::class, 'index'])->name('warga.mutasi-poin');
        Route::get('/iuran', [IuranWargaController::class, 'index'])->name('warga.iuran');
        Route::get('/profil', [ProfileWargaController::class, 'index'])->name('warga.profil');
        Route::put('/profil', [ProfileWargaController::class, 'update'])->name('warga.profil.update');
        Route::put('/profil/password', [ProfileWargaController::class, 'changePassword'])->name('warga.profil.password');
    });
    
});