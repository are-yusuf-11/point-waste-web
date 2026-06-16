<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use App\Models\MutasiPoin;
use App\Models\IuranRT;
use Illuminate\Support\Facades\Auth;

class WargaDashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // 1. Hitung total saldo poin aktif warga saat ini
        $totalSaldoPoin = MutasiPoin::where('user_id', $userId)->sum('poin');

        // 2. Ambil jumlah tagihan iuran yang belum dibayar (status: unpaid/pending)
        $tagihanAktif = IuranRT::where('user_id', $userId)
                            ->where('status', 'unpaid')
                            ->count();

        // 3. Ambil riwayat aktivitas terakhir (misal 3 setoran terbaru)
        $aktivitasTerakhir = \App\Models\SetorSampah::where('user_id', $userId)
                                ->orderBy('created_at', 'desc')
                                ->take(3)
                                ->get();

        return view('warga.dashboard', compact('totalSaldoPoin', 'tagihanAktif', 'aktivitasTerakhir'));
    }
}