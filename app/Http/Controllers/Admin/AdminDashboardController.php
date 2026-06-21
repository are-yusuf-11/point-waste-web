<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Models\RT;
use App\Models\SetorSampah;
use App\Models\DetailSetorSampah;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // ==========================================
        // 1. GLOBAL STATS BENTO GRID (KOTAK ATAS)
        // ==========================================
        
        // Total Pengguna Terdaftar
        $totalUsers = Users::count();

        // Total Unit RT Aktif di Database
        $activeRtCount = RT::count(); 
        $totalRtTarget = 180; // Target kapasitas sistem (statis sesuai UI template)

        // Total Sampah Diproses (Menjumlahkan berat_kg lalu dikonversi ke Ton)
        $totalKg = DetailSetorSampah::sum('berat_kg');
        $totalTonnes = round($totalKg / 1000, 1);


        // ==========================================
        // 2. WASTE COLLECTION GROWTH (GRAFIK BATANG)
        // ==========================================
        // Ambil total berat per angka bulan (1-12) di tahun berjalan
        $monthlyData = DetailSetorSampah::select(
            DB::raw('SUM(berat_kg) as total_berat'),
            DB::raw('MONTH(created_at) as bulan_angka')
        )
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->pluck('total_berat', 'bulan_angka') // Mengubah hasil menjadi key-value array [bulan => berat]
        ->toArray();


        // ==========================================
        // 3. TOP-PERFORMING RT UNITS (TABEL REGIONAL)
        // ==========================================
        
        // Mengambil data RT beserta jumlah warga dan akumulasi total berat sampah yang mereka kumpulkan
        $topRt = RT::withCount('warga')
            ->get()
            ->map(function ($rt) {
                // Ambil daftar id_user yang terdaftar di RT ini
                $userIds = $rt->warga->pluck('id_user');
                
                // Hitung total berat sampah yang disetor oleh user-user tersebut
                $totalWaste = DetailSetorSampah::whereIn('id_setor_sampah', function($query) use ($userIds) {
                    $query->select('id_setor_sampah')
                          ->from('setor_sampah')
                          ->whereIn('id_user', $userIds);
                })->sum('berat_kg');

                // Konversi berat ke satuan Ton
                $rt->total_waste_ton = round($totalWaste / 1000, 2);
                return $rt;
            })
            ->sortByDesc('total_waste_ton') // Urutkan dari pengumpul sampah terbanyak
            ->take(4); // Ambil top 4 data saja untuk tabel UI


        // ==========================================
        // 4. RECENT SYSTEM ACTIVITY LOG (TIMELINE KANAN)
        // ==========================================
        
        // Mengambil data setoran sampah paling baru yang masuk ke sistem bersama info pengirimnya
        $recentActivities = SetorSampah::with('user')
            ->latest()
            ->take(4)
            ->get();


        // Kirim semua variabel ke view admin.dashboard
        return view('admin.dashboard', compact(
            'totalUsers', 
            'activeRtCount', 
            'totalRtTarget', 
            'totalTonnes',
            'monthlyData',
            'topRt',
            'recentActivities'
        ));
    }
}