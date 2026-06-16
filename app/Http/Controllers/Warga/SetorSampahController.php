<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SetorSampah;
use App\Models\MutasiPoin;
use Illuminate\Support\Facades\Auth;

class SetorSampahController extends Controller
{
    // Menampilkan halaman Riwayat Setoran & Saldo Poin
    public function index()
    {
        $userId = Auth::id();

        // Mengambil semua data transaksi setor sampah milik warga ini
        $riwayatSetoran = SetorSampah::where('user_id', $userId)
                            ->orderBy('created_at', 'desc')
                            ->get();

        // Mengambil semua riwayat mutasi poin (masuk/keluar)
        $riwayatPoin = MutasiPoin::where('user_id', $userId)
                        ->orderBy('created_at', 'desc')
                        ->get();

        return view('warga.setor.index', compact('riwayatSetoran', 'riwayatPoin'));
    }

    // Menampilkan form untuk mengajukan setoran sampah baru
    public function create()
    {
        return view('warga.setor.create');
    }

    // Menyimpan data pengajuan setoran sampah warga ke database
    public function store(Request $request)
    {
        $request->validate([
            'deskripsi_sampah' => 'required|string|max:255',
            'perkiraan_berat' => 'required|numeric|min:0.1',
        ]);

        // Membuat data setoran baru dengan status awal 'pending'
        SetorSampah::create([
            'user_id' => Auth::id(),
            'deskripsi_sampah' => $request->deskripsi_sampah,
            'berat' => $request->perkiraan_berat,
            'status' => 'pending', // Menunggu tim Pengurus RT memverifikasi fisik sampahnya
            'poin_didapat' => 0
        ]);

        return redirect()->route('warga.setor.index')
            ->with('success', 'Pengajuan setoran berhasil dikirim! Silakan bawa sampah Anda ke Pengurus RT untuk diverifikasi.');
    }
}