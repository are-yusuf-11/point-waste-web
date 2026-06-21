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
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\KategoriSampahController;
use App\Http\Controllers\Admin\MonitoringSistemController;
use App\Http\Controllers\Admin\KonfigurasiController;
use App\Http\Controllers\PengurusRT\LaporanController;
use App\Http\Controllers\PengurusRT\DashboardRTController as PengurusDashboardController;
use App\Http\Controllers\PengurusRT\VerifikasiSetoranController;
use App\Http\Controllers\PengurusRT\TagihanIuranController;
use App\Http\Controllers\PengurusRT\KategoriSampahController as PengurusKategoriSampahController;

// =========================================================
// ROUTE PUBLIC (Tidak Butuh Login)
// =========================================================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// [BERSIH] Duplikasi route login & register yang menumpuk sudah dihapus
Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('showRegister');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// =========================================================
// ROUTE GLOBAL AUTH ONLY
// =========================================================
Route::middleware(['auth', 'check_role'])->group(function () {
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::put('/profile', [ProfileController::class, 'update']);

    // ==========================================
    // PANEL AKTOR: WARGA
    // ==========================================
    Route::prefix('warga')->group(function () {
        Route::get('/dashboard', [WargaDashboardController::class, 'index'])->name('warga.dashboard');
        
        // Setor Sampah
        Route::get('/setor-sampah', [SetorSampahController::class, 'index'])->name('warga.setor-sampah');
        Route::post('/setor-sampah', [SetorSampahController::class, 'store'])->name('warga.setor-sampah.store');
        
        // [TAMBAHAN] Fitur Riwayat & Laporan Mutasi Poin Warga
        Route::get('/mutasi-poin', [MutasiPoinController::class, 'index'])->name('warga.mutasi-poin');
        Route::get('/mutasi-poin/laporan', [MutasiPoinController::class, 'laporan'])->name('warga.mutasi-poin.laporan');
        Route::get('/mutasi-poin/cetak', [MutasiPoinController::class, 'cetak'])->name('warga.mutasi-poin.cetak');
        
        // Iuran
        Route::get('/iuran', [IuranWargaController::class, 'index'])->name('warga.iuran');
        
        // Profil Akun
        Route::get('/profil', [ProfileWargaController::class, 'index'])->name('warga.profil');
        Route::put('/profil', [ProfileWargaController::class, 'update'])->name('warga.profil.update');
        Route::put('/profil/password', [ProfileWargaController::class, 'changePassword'])->name('warga.profil.password');
    });

    // ==========================================
    // PANEL AKTOR: ADMIN
    // ==========================================
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

        // Manajemen Pengguna
        Route::get('/manajemen-pengguna', [UserManagementController::class, 'index'])->name('admin.manajemen-pengguna');
        Route::get('/manajemen-pengguna/tambah', [UserManagementController::class, 'create'])->name('admin.manajemen-pengguna.create');
        Route::post('/manajemen-pengguna/simpan', [UserManagementController::class, 'store'])->name('admin.manajemen-pengguna.store');
        Route::get('/manajemen-pengguna/edit/{id}', [UserManagementController::class, 'edit'])->name('admin.manajemen-pengguna.edit');
        Route::put('/manajemen-pengguna/update/{id}', [UserManagementController::class, 'update'])->name('admin.manajemen-pengguna.update');
        Route::delete('/manajemen-pengguna/hapus/{id}', [UserManagementController::class, 'destroy'])->name('admin.manajemen-pengguna.destroy');
        Route::patch('/manajemen-pengguna/toggle-status/{id}', [UserManagementController::class, 'toggleStatus'])->name('admin.manajemen-pengguna.toggle-status');

        // Kategori Sampah
        Route::get('/kategori-sampah', [KategoriSampahController::class, 'index'])->name('admin.kategori-sampah');
        Route::get('/kategori-sampah/tambah', [KategoriSampahController::class, 'create'])->name('admin.kategori-sampah.create');
        Route::post('/kategori-sampah/simpan', [KategoriSampahController::class, 'store'])->name('admin.kategori-sampah.store');
        Route::get('/kategori-sampah/{id}/edit', [KategoriSampahController::class, 'edit'])->name('admin.kategori-sampah.edit');
        Route::put('/kategori-sampah/{id}/update', [KategoriSampahController::class, 'update'])->name('admin.kategori-sampah.update');

        Route::get('/monitoring-sistem', [MonitoringSistemController::class, 'index'])->name('admin.monitoring-sistem');
        Route::get('/konfigurasi', [KonfigurasiController::class, 'index'])->name('admin.konfigurasi');
    });

    // ==========================================
    // PANEL AKTOR: PENGURUS RT
    // ==========================================
    Route::prefix('pengurus-rt')->group(function () {
        Route::get('/dashboard', [PengurusDashboardController::class, 'index'])->name('pengurus-rt.dashboard');
        Route::get('/verifikasi-setoran', [VerifikasiSetoranController::class, 'index'])->name('pengurus-rt.setor-sampah');
        Route::get('/tagihan-iuran', [TagihanIuranController::class, 'index'])->name('pengurus-rt.manajemen-iuran');
        Route::get('/kategori-sampah', [PengurusKategoriSampahController::class, 'index'])->name('pengurus-rt.waste-categories');
        Route::get('/laporan', [LaporanController::class, 'index'])->name('pengurus-rt.laporan');
    });
    
});