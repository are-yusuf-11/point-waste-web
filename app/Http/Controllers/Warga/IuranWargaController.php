<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IuranRT;
use App\Models\MutasiPoin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IuranWargaController extends Controller
{
    // Menampilkan daftar seluruh tagihan iuran RT milik warga
    public function index()
    {
        $userId = Auth::id();

        $daftarTagihan = IuranRT::where('user_id', $userId)
                            ->orderBy('created_at', 'desc')
                            ->get();

        $totalSaldoPoin = MutasiPoin::where('user_id', $userId)->sum('poin');

        return view('warga.iuran.index', compact('daftarTagihan', 'totalSaldoPoin'));
    }

    // Proses menukarkan poin untuk memotong/membayar tagihan iuran
    public function tukarPoin(Request $request, $id)
    {
        $userId = Auth::id();
        $tagihan = IuranRT::where('id', $id)->where('user_id', $userId)->firstOrFail();
        
        // Pastikan tagihan memang belum lunas
        if ($tagihan->status === 'paid') {
            return back()->with('error', 'Tagihan ini sudah lunas.');
        }

        // Cek saldo poin warga saat ini
        $saldoPoin = MutasiPoin::where('user_id', $userId)->sum('poin');

        // Misalkan aturan konversi sistem: 1 Poin = Rp 1,-
        // Anda bisa menyesuaikan rumus konversi ini dengan analisis sistem tim Anda
        $poinDibutuhkan = $tagihan->nominal; 

        if ($saldoPoin < $poinDibutuhkan) {
            return back()->with('error', 'Saldo poin Anda tidak cukup untuk melunasi iuran ini.');
        }

        // Jalankan Database Transaction agar pemotongan poin dan pelunasan iuran sinkron
        DB::transaction(function () use ($userId, $tagihan, $poinDibutuhkan) {
            
            // 1. Update status tagihan iuran menjadi lunas
            $tagihan->update([
                'status' => 'paid',
                'metode_pembayaran' => 'tukar_poin',
                'tanggal_bayar' => now()
            ]);

            // 2. Catat pengurangan poin di tabel mutasi (poin minus/negatif)
            MutasiPoin::create([
                'user_id' => $userId,
                'poin' => -$poinDibutuhkan, // Nilai minus melambangkan poin keluar/digunakan
                'keterangan' => 'Penukaran poin untuk pelunasan Iuran RT ID #' . $tagihan->id
            ]);
        });

        return redirect()->route('warga.iuran.index')->with('success', 'Iuran RT berhasil dilunasi menggunakan konversi poin sampah Anda!');
    }
}