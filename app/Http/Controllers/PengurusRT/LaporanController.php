<?php

namespace App\Http\Controllers\PengurusRT; // Sesuaikan dengan namespace projek Anda, biasanya App\Http\Controllers

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SetorSampah;
use App\Models\IuranRT;
use App\Models\Users;
use App\Models\DetailSetorSampah;

class LaporanController extends Controller
{
    /**
     * Menampilkan halaman laporan utama (Ringkasan)
     */
    public function index()
    {
        // 1. Menghitung Ringkasan Statistik untuk Dashboard Laporan
        $totalWarga = Users::where('role', 'Warga')->count();
        $totalSetorDiterima = SetorSampah::where('status', 'Diterima')->count();
        $totalPoinBeredar = Users::sum('total_poin');
        $totalIuranLunas = IuranRT::where('status_bayar', 'Sudah Bayar')->sum('total_bayar');

        return view('laporan.index', compact(
            'totalWarga', 
            'totalSetorDiterima', 
            'totalPoinBeredar', 
            'totalIuranLunas'
        ));
    }

    /**
     * Laporan Transaksi Setor Sampah
     */
    public function laporanSetorSampah(Request $request)
    {
        // Query dasar dengan Eager Loading ke model warga (Users) dan detail item sampah
        $query = SetorSampah::with(['warga', 'detail.kategori']);

        // Filter Berdasarkan Tanggal (Mulai & Selesai) jika diinput oleh user
        if ($request->has('tgl_mulai') && $request->tgl_mulai != '') {
            $query->where('tgl_setor', '>=', $request->tgl_mulai);
        }
        if ($request->has('tgl_selesai') && $request->tgl_selesai != '') {
            $query->where('tgl_setor', '<=', $request->tgl_selesai);
        }

        // Filter Berdasarkan Status (Menunggu, Diterima, Ditolak)
        if ($request->has('status') && $request->status != '') {
            $query->where('status', $request->status);
        }

        // Urutkan berdasarkan tanggal terbaru
        $dataSetor = $query->orderBy('tgl_setor', 'desc')->get();

        return view('laporan.setor_sampah', compact('dataSetor'));
    }

    /**
     * Laporan Transaksi Pembayaran Iuran RT
     */
    public function laporanIuran(Request $request)
    {
        // Query dasar dengan Eager Loading ke model warga (penerima tagihan) dan pembuat tagihan
        $query = IuranRT::with(['warga', 'pembuat']);

        // Filter Berdasarkan Periode (contoh: "Januari 2026")
        if ($request->has('periode') && $request->periode != '') {
            $query->where('periode', $request->periode);
        }

        // Filter Berdasarkan Status Pembayaran (Belum Bayar / Sudah Bayar)
        if ($request->has('status_bayar') && $request->status_bayar != '') {
            $query->where('status_bayar', $request->status_bayar);
        }

        $dataIuran = $query->orderBy('periode', 'desc')->get();

        return view('laporan.iuran', compact('dataIuran'));
    }
}