<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use App\Models\SetorSampah;
use App\Models\MutasiPoin;
use App\Models\IuranRt;
use App\Models\KategoriSampah;
use Carbon\Carbon;

class WargaDashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $user = Auth::user();

        // 1. STATISTIK: Saldo Poin Saat Ini
        $saldoPoin = $user->total_poin;

        // [TAMBAHAN] STATISTIK: Tren Poin Minggu Ini (+120 Poin)
        // Menghitung jumlah poin masuk dalam 7 hari terakhir
        $poinMingguIni = MutasiPoin::where('id_user', $userId)
            ->where('jenis_transaksi', 'Masuk') // Memastikan hanya transaksi poin masuk
            ->where('tanggal', '>=', Carbon::now()->subDays(7)) // Filter 7 hari ke belakang
            ->sum('nominal_poin');

        // 2. STATISTIK & KANAN: Data Tagihan Iuran Periode Terbaru
        $iuranTerbaru = IuranRt::where('id_user', $userId)
            ->orderBy('periode', 'desc')
            ->first();

        // 3. STATISTIK: Total Setoran Sampah (Kg) Selama Ini
        $totalBeratSampah = DB::table('detail_setor_sampah')
            ->join('setor_sampah', 'detail_setor_sampah.id_setor_sampah', '=', 'setor_sampah.id_setor_sampah')
            ->where('setor_sampah.id_user', $userId)
            ->where('setor_sampah.status', 'Diterima')
            ->sum('detail_setor_sampah.berat_kg');

        // [TAMBAHAN] STATISTIK: Hitungan Mitigasi CO2
        // Menggunakan koefisien pengali 0.3 (Sesuaikan dengan standar konversi proyek Anda)
        $koefisienCO2 = 0.3;
        $mitigasiCO2 = $totalBeratSampah * $koefisienCO2;

        // 4. DROPDOWN FORM: Master Kategori Sampah yang Aktif
        $masterKategori = KategoriSampah::where('status_aktif', 1)->get();

        // 5. TABEL: Riwayat Setoran Sampah (Terbaru)
        $riwayatSetoran = SetorSampah::where('id_user', $userId)
            ->with(['detailSetorSampah.kategoriSampah'])
            ->orderBy('tgl_setor', 'desc')
            ->take(5)
            ->get();

        // 6. TABEL: Mutasi Poin
        $mutasiPoin = MutasiPoin::where('id_user', $userId)
            ->orderBy('tanggal', 'desc')
            ->take(5)
            ->get();

        // 7. NOTIFIKASI
        $notifikasi = [
            [
                'tipe' => 'setor_sukses',
                'judul' => 'Setoran Sampah Berhasil Disetujui',
                'pesan' => 'Setoran Anda pada 24 Okt telah diverifikasi petugas. +45 poin telah ditambahkan ke saldo Anda.'
            ]
        ];

        return view('warga.dashboard', compact(
            'user',
            'saldoPoin',
            'poinMingguIni',     
            'iuranTerbaru',
            'totalBeratSampah',
            'mitigasiCO2',       
            'masterKategori',
            'riwayatSetoran',
            'mutasiPoin',
            'notifikasi'
        ));
    }
}