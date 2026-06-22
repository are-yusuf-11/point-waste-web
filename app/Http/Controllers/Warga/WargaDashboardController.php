<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use App\Models\IuranRt;
use App\Models\KategoriSampah;
use App\Models\MutasiPoin;
use App\Models\SetorSampah;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WargaDashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $user = Auth::user();

        // 1. STATISTIK: Saldo Poin Saat Ini
        $saldoPoin = $user->total_poin;

        // STATISTIK: Tren Poin Minggu Ini
        $poinMingguIni = MutasiPoin::where('id_user', $userId)
            ->where('jenis_transaksi', 'Masuk')
            ->where('tanggal', '>=', Carbon::now()->subDays(7))
            ->sum('nominal_poin');

        // 2. STATISTIK: Data Tagihan Iuran Periode Terbaru
        $iuranTerbaru = IuranRt::where('id_user', $userId)
            ->orderBy('periode', 'desc')
            ->first();

        // 3. STATISTIK: Total Setoran Sampah (Kg) Selama Ini (Hanya yang Diterima/Selesai)
        $totalBeratSampah = DB::table('detail_setor_sampah')
            ->join('setor_sampah', 'detail_setor_sampah.id_setor_sampah', '=', 'setor_sampah.id_setor_sampah')
            ->where('setor_sampah.id_user', $userId)
            ->where('setor_sampah.status', 'Diterima')
            ->sum('detail_setor_sampah.berat_kg') ?? 0;

        // STATISTIK: Hitungan Mitigasi CO2
        $koefisienCO2 = 0.3;
        $mitigasiCO2 = $totalBeratSampah * $koefisienCO2;

        // 4. DROPDOWN FORM: Master Kategori Sampah yang Aktif
        $masterKategori = KategoriSampah::query()->where('status_aktif', 1)->get();

        // 5. TABEL: Riwayat Setoran Sampah (Terbaru)
        $riwayatSetoran = SetorSampah::query()->where('id_user', $userId)
            ->with(['detailSetorSampah.kategoriSampah'])
            ->orderBy('tgl_setor', 'desc')
            ->take(5)
            ->get();

        // 6. TABEL: Mutasi Poin
        $mutasiPoin = MutasiPoin::where('id_user', $userId)
            ->orderBy('tanggal', 'desc')
            ->take(5)
            ->get();

        // 7. SINKRONISASI NOTIFIKASI: Mengambil data riil dari Database
        $notifikasi = [];

        // Ambil setoran yang masih 'Menunggu' untuk memicu kotak warna Amber/Kuning
        $setoranPending = SetorSampah::query()->where('id_user', $userId)
            ->where('status', 'Menunggu')
            ->orderBy('tgl_setor', 'desc')
            ->get();

        foreach ($setoranPending as $sp) {
            $tanggalFormat = Carbon::parse($sp->tgl_setor)->translatedFormat('d M');
            $notifikasi[] = [
                'judul' => 'Setoran Sampah Menunggu Verifikasi',
                'pesan' => "Setoran Anda pada {$tanggalFormat} sedang menunggu pemeriksaan oleh Pengurus RT.",
            ];
        }

        // Ambil setoran 'Diterima' dalam 3 hari terakhir untuk memicu kotak sukses warna Indigo/Biru
        $setoranDiterima = SetorSampah::query()->where('id_user', $userId)
            ->where('status', 'Diterima')
            ->where('updated_at', '>=', Carbon::now()->subDays(3))
            ->orderBy('updated_at', 'desc')
            ->get();

        foreach ($setoranDiterima as $sd) {
            $tanggalFormat = Carbon::parse($sd->tgl_setor)->translatedFormat('d M');
            // Mencari nominal poin yang didapatkan dari mutasi terkait (jika ada)
            $poinMasuk = MutasiPoin::where('id_user', $userId)
                ->where('jenis_transaksi', 'Masuk')
                ->whereDate('tanggal', Carbon::parse($sd->updated_at)->toDateString())
                ->first();
                
            $poinTeks = $poinMasuk ? "+{$poinMasuk->nominal_poin} poin telah ditambahkan." : "Poin telah ditambahkan ke saldo Anda.";

            $notifikasi[] = [
                'judul' => 'Setoran Sampah Berhasil Disetujui',
                'pesan' => "Setoran Anda pada {$tanggalFormat} telah sukses diverifikasi oleh petugas. {$poinTeks}",
            ];
        }

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