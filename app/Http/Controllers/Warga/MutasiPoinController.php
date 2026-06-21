<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\MutasiPoin;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class MutasiPoinController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $user = Auth::user();

        $totalPoinSaatIni = $user->total_poin;

        $bulanIni = Carbon::now();
        $awalBulan = $bulanIni->copy()->startOfMonth();
        $akhirBulan = $bulanIni->copy()->endOfMonth();

        $poinDiperoleh = MutasiPoin::where('id_user', $userId)
            ->where('jenis_transaksi', 'Masuk')
            ->whereBetween('tanggal', [$awalBulan, $akhirBulan])
            ->sum('nominal_poin');

        $poinDigunakan = MutasiPoin::where('id_user', $userId)
            ->where('jenis_transaksi', 'Keluar')
            ->whereBetween('tanggal', [$awalBulan, $akhirBulan])
            ->sum('nominal_poin');

        $riwayatMutasi = MutasiPoin::where('id_user', $userId)
            ->orderBy('tanggal', 'desc')
            ->paginate(10);

        return view('warga.mutasi-poin', compact(
            'user',
            'totalPoinSaatIni',
            'poinDiperoleh',
            'poinDigunakan',
            'riwayatMutasi'
        ));
    }

    // SINKRONISASI 1: Menambahkan method 'laporan' yang dipanggil di web.php
    public function laporan()
    {
        $user = Auth::user();
        
        $riwayatMutasi = MutasiPoin::where('id_user', $user->id_user)
            ->orderBy('tanggal', 'desc')
            ->get();

        return view('warga.laporan-mutasi', compact('user', 'riwayatMutasi'));
    }

    // SINKRONISASI 2: Mengubah nama method dari 'eksporPdf' menjadi 'cetakPdf' agar sesuai web.php
    public function cetakPdf()
    {
        $user = Auth::user();
        
        // Ambil seluruh data mutasi poin tanpa pagination agar tercetak semua di PDF
        $riwayatMutasi = MutasiPoin::where('id_user', $user->id_user)
            ->orderBy('tanggal', 'desc')
            ->get();

        $totalPoinSaatIni = $user->total_poin;

        // Load view cetak-mutasi dan kirim datanya
        $pdf = Pdf::loadView('warga.cetak-mutasi', compact('user', 'riwayatMutasi', 'totalPoinSaatIni'));

        // Set ukuran kertas menjadi A4 dengan orientasi Portrait
        $pdf->setPaper('a4', 'portrait');

        // Menghasilkan file download PDF dengan nama dinamis
        $namaFile = 'Laporan_Mutasi_Poin_' . str_replace(' ', '_', $user->nama) . '_' . date('Ymd') . '.pdf';
        return $pdf->download($namaFile);
    }
}