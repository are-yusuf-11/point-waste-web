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
use App\Http\Controllers\PengurusRT\LaporanController;
use App\Http\Controllers\PengurusRT\ManajemenIuaranController;
use App\Http\Controllers\PengurusRT\PengurusDashboardController;
use App\Http\Controllers\PengurusRT\WasteCategoriesController;

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

    // PANEL AKTOR: PENGURUS RT
    Route::prefix('pengurus-rt')->group(function () {
        Route::get('/dashboard', [PengurusDashboardController::class, 'index'])->name('pengurus-rt.dashboard');
        Route::get('/laporan', [LaporanController::class, 'index'])->name('pengurus-rt.laporan');
        Route::get('/manajemen-iuran', [ManajemenIuaranController::class, 'index'])->name('pengurus-rt.manajemen-iuran');
        Route::get('/setor-sampah', [SetorSampahController::class, 'index'])->name('pengurus-rt.setor-sampah');
        Route::post('/waste-categories', [WasteCategoriesController::class, 'index'])->name('pengurus-rt.waste-categories');
    });
    
});