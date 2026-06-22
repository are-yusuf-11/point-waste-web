<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Models\RT;
use App\Models\SetorSampah;
use App\Models\DetailSetorSampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // 1. Ambil Total Pengguna Terdaftar
        $totalUsers = Users::count(); 

        // 2. Ambil Jumlah RT Aktif dan Target RT (Contoh target: 20)
        // Dianggap RT aktif jika memiliki minimal 1 warga terdaftar
        $activeRtCount = RT::has('warga')->count();
        $totalRtTarget = 20; 

        // 3. Hitung Total Sampah Terproses (Mengubah Kg ke Ton)
        $totalKg = DetailSetorSampah::sum('berat_kg');
        $totalTonnes = $totalKg > 0 ? round($totalKg / 1000, 2) : 0;

        // 4. Konfigurasi Sistem Statis / Mockup
        $currentPoinExchange = 100; // Rp 100 per poin
        $currentBatasSetoran = 50;  // 50 kg batas harian
        $notificationChannels = [
            'email' => true,
            'whatsapp' => true
        ];

        // 5. Data Grafik Bulanan (Total Berat per Bulan di Tahun Berjalan)
        $monthlyDataRaw = DetailSetorSampah::select(
                DB::raw('MONTH(setor_sampah.tgl_setor) as bulan'),
                DB::raw('SUM(detail_setor_sampah.berat_kg) as total_berat')
            )
            ->join('setor_sampah', 'detail_setor_sampah.id_setor_sampah', '=', 'setor_sampah.id_setor_sampah')
            ->whereYear('setor_sampah.tgl_setor', date('Y'))
            ->groupBy(DB::raw('MONTH(setor_sampah.tgl_setor)'))
            ->pluck('total_berat', 'bulan')
            ->toArray();

        // Inisialisasi array 1-12 agar bulan yang kosong tetap bernilai 0
        $monthlyData = [];
        for ($i = 1; $i <= 12; $i++) {
            $monthlyData[$i] = $monthlyDataRaw[$i] ?? 0;
        }

        // 6. Data Peringkat RT Terbaik (Top-Performing RT Units)
        // Menghitung jumlah warga dan total sampah dalam Ton per RT
        $topRt = RT::withCount('warga')
            ->leftJoin('users', 'rt.id_rt', '=', 'users.id_rt')
            ->leftJoin('setor_sampah', 'users.id_user', '=', 'setor_sampah.id_user')
            ->leftJoin('detail_setor_sampah', 'setor_sampah.id_setor_sampah', '=', 'detail_setor_sampah.id_setor_sampah')
            ->select(
                'rt.id_rt',
                'rt.no_rt',
                'rt.kelurahan',
                DB::raw('ROUND(SUM(detail_setor_sampah.berat_kg) / 1000, 2) as total_waste_ton')
            )
            ->groupBy('rt.id_rt', 'rt.no_rt', 'rt.kelurahan')
            ->orderBy('total_waste_ton', 'desc')
            ->take(5) // Ambil 5 besar
            ->get()
            ->map(function ($item) {
                // Atur default jika belum ada sampah terkumpul
                $item->total_waste_ton = $item->total_waste_ton ?? 0;
                return $item;
            });

        // 7. Log Aktivitas Terbaru (Recent System Activity Log)
        $recentActivities = SetorSampah::with('user')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        // Kirim semua variabel yang dibutuhkan oleh dashboard.blade.php
        return view('admin.dashboard', compact(
            'totalUsers',
            'activeRtCount',
            'totalRtTarget',
            'totalTonnes',
            'currentPoinExchange',
            'currentBatasSetoran',
            'notificationChannels',
            'monthlyData',
            'topRt',
            'recentActivities'
        ));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nilai_poin' => 'required|numeric|min:0',
            'batas_setoran' => 'required|numeric|min:0',
        ], [
            'nilai_poin.required' => 'Nilai poin tidak boleh kosong.',
            'nilai_poin.numeric' => 'Nilai poin harus berupa angka.',
            'batas_setoran.required' => 'Batas setoran tidak boleh kosong.',
            'batas_setoran.numeric' => 'Batas setoran harus berupa angka.',
        ]);

        try {
            $nilaiPoin = $request->input('nilai_poin');
            $batasSetoran = $request->input('batas_setoran');

            // Proses simpan data config ke DB kamu bisa ditaruh di sini

            return response()->json([
                'success' => true,
                'message' => 'Konfigurasi sistem berhasil diperbarui!'
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan: ' . $e->getMessage()
            ], 500);
        }
    }
}