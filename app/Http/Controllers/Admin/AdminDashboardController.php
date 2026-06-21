<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // ==========================================
        // 1. DATA VALUE CONFIGURATIONS (KOTAK ATAS)
        // ==========================================
        // Di dunia nyata, nilai ini idealnya diambil dari tabel settings/configs.
        // Di bawah ini adalah inisialisasi nilai awal sesuai dengan UI tampilan mockup.
        $currentPoinExchange = 100; // Rp 100 per poin
        $currentBatasSetoran = 50;  // 50 kg batas harian
        $notificationChannels = [
            'email' => true,
            'whatsapp' => true
        ];

        // ==========================================
        // 2. RIWAYAT PERUBAHAN KONFIGURASI (TABEL TENGAH)
        // ==========================================
        // Kita membuat dummy collection yang menyerupai data asli dari database
        // lengkap dengan nama, tanggal, parameter, dan status sesuai image_444c16.png.
        $configHistories = collect([
            (object)[
                'tanggal' => '24 Okt, 14:20',
                'admin_nama' => 'Adi Jaya',
                'admin_initial' => 'AJ',
                'admin_color' => 'bg-emerald-100 text-emerald-800',
                'parameter' => 'Nilai Tukar Poin',
                'nilai_lama' => 'Rp 80',
                'nilai_baru' => 'Rp 100',
                'status' => 'BERHASIL'
            ],
            (object)[
                'tanggal' => '23 Okt, 09:15',
                'admin_nama' => 'Siti Rahma',
                'admin_initial' => 'SR',
                'admin_color' => 'bg-sky-100 text-sky-800',
                'parameter' => 'Batas Setoran Harian',
                'nilai_lama' => '30 kg',
                'nilai_baru' => '50 kg',
                'status' => 'BERHASIL'
            ],
            (object)[
                'tanggal' => '21 Okt, 23:45',
                'admin_nama' => 'Adi Jaya',
                'admin_initial' => 'AJ',
                'admin_color' => 'bg-emerald-100 text-emerald-800',
                'parameter' => 'Interval Backup',
                'nilai_lama' => 'Manual',
                'nilai_baru' => 'Harian',
                'status' => 'BERHASIL'
            ],
            (object)[
                'tanggal' => '19 Okt, 10:10',
                'admin_nama' => 'Budi M.',
                'admin_initial' => 'BM',
                'admin_color' => 'bg-purple-100 text-purple-800',
                'parameter' => 'Kanal WhatsApp',
                'nilai_lama' => 'Nonaktif',
                'nilai_baru' => 'Aktif',
                'status' => 'BERHASIL'
            ],
        ]);

        // Kirim seluruh data konfigurasi ke view
        return view('admin.dashboard', compact(
            'currentPoinExchange',
            'currentBatasSetoran',
            'notificationChannels',
            'configHistories'
        ));
    }

    /**
     * Fungsi untuk memproses penyimpanan perubahan konfigurasi baru
     */
    public function update(Request $request)
    {
        // 1. Mengubah 'integer' menjadi 'numeric' agar mendukung desimal/pecahan
        $request->validate([
            'nilai_poin' => 'required|numeric|min:0',
            'batas_setoran' => 'required|numeric|min:0',
        ], [
            // Kustomisasi pesan jika validasi Laravel gagal
            'nilai_poin.required' => 'Nilai poin tidak boleh kosong.',
            'nilai_poin.numeric' => 'Nilai poin harus berupa angka.',
            'batas_setoran.required' => 'Batas setoran tidak boleh kosong.',
            'batas_setoran.numeric' => 'Batas setoran harus berupa angka.',
        ]);

        try {
            $nilaiPoin = $request->input('nilai_poin');
            $batasSetoran = $request->input('batas_setoran');

            // =================================================================
            // PROSES SIMPAN KE DATABASE KAMU DI SINI
            // Contoh:
            // Setting::updateOrCreate(['key' => 'nilai_poin'], ['value' => $nilaiPoin]);
            // Setting::updateOrCreate(['key' => 'batas_setoran'], ['value' => $batasSetoran]);
            // =================================================================

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