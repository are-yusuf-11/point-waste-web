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
Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
Route::get('/register', [AuthController::class, 'showRegister'])->name('showRegister');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/forgot-password', [AuthController::class, 'showForgotPassword'])->name('auth.forgot-password');
Route::post('/forgot-password', [AuthController::class, 'sendVerificationCode'])->name('auth.forgot-password.send');
Route::get('/verify-reset', [AuthController::class, 'showVerifyForm'])->name('auth.show-verify');
Route::post('/verify-reset', [AuthController::class, 'submitResetPassword'])->name('auth.submit-reset');

// =========================================================
// ROUTE GLOBAL AUTH ONLY
// =========================================================
Route::middleware(['auth', 'check_role'])->group(function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // PANEL AKTOR: WARGA
    Route::prefix('warga')->group(function () {
        Route::get('/dashboard', [WargaDashboardController::class, 'index'])->name('warga.dashboard');
        Route::get('/setor-sampah', [SetorSampahController::class, 'index'])->name('warga.setor-sampah');
        Route::post('/setor-sampah', [SetorSampahController::class, 'store'])->name('warga.setor-sampah.store');
        Route::get('/mutasi-poin', [MutasiPoinController::class, 'index'])->name('warga.mutasi-poin');
        Route::get('/mutasi-poin/ekspor-pdf', [MutasiPoinController::class, 'eksporPdf'])->name('warga.mutasi-poin.ekspor-pdf');
        Route::get('/iuran', [IuranWargaController::class, 'index'])->name('warga.iuran');
        Route::get('/profil', [ProfileWargaController::class, 'index'])->name('warga.profil');
        Route::put('/profil', [ProfileWargaController::class, 'update'])->name('warga.profil.update');
        Route::put('/profil/password', [ProfileWargaController::class, 'changePassword'])->name('warga.profil.password');
    });

    // PANEL AKTOR: PENGURUS RT
    Route::prefix('pengurus-rt')->group(function () {
        Route::get('/dashboard', [PengurusDashboardController::class, 'index'])->name('pengurus_rt.dashboard');
    });

    // PANEL AKTOR: ADMIN
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    });

});