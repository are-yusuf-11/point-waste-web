<?php

namespace App\Http\Controllers\PengurusRT;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SetorSampah;
use App\Models\DetailSetorSampah;
use App\Models\KategoriSampah;
use App\Models\Users;
use Illuminate\Support\Facades\DB;

class SetorSampahController extends Controller
{
    /**
     * 1. Menampilkan semua daftar setoran sampah dari warga
     */
    public function index()
    {
        // Mengambil data setoran sampah beserta informasi user/warga yang menyetor
        $setoran = DB::table('setor_sampah')
            ->join('users', 'setor_sampah.id_user', '=', 'users.id_user')
            ->select('setor_sampah.*', 'users.nama as nama_warga')
            ->orderBy('setor_sampah.tgl_setor', 'desc')
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Daftar setoran sampah berhasil dimuat',
            'data' => $setoran
        ], 200);
    }

    /**
     * 2. Menampilkan detail setoran sampah beserta kategori/jenis sampah yang disetor
     */
    public function show($id)
    {
        // Ambil data utama setoran sampah
        $setorSampah = DB::table('setor_sampah')
            ->join('users', 'setor_sampah.id_user', '=', 'users.id_user')
            ->where('setor_sampah.id_setor_sampah', $id)
            ->select('setor_sampah.*', 'users.nama as nama_warga', 'users.total_poin as poin_sekarang_warga')
            ->first();

        if (!$setorSampah) {
            return response()->json([
                'success' => false,
                'message' => 'Data setoran tidak ditemukan'
            ], 404);
        }

        // Ambil item detail sampah yang disetor (detail_setor_sampah)
        $detailSampah = DB::table('detail_setor_sampah')
            ->join('kategori_sampah', 'detail_setor_sampah.id_kategori', '=', 'kategori_sampah.id_kategori')
            ->where('detail_setor_sampah.id_setor_sampah', $id)
            ->select('detail_setor_sampah.*', 'kategori_sampah.nama_kategori')
            ->get();

        return response()->json([
            'success' => true,
            'data' => [
                'setoran' => $setorSampah,
                'detail_sampah' => $detailSampah
            ]
        ], 200);
    }

    /**
     * 3. Verifikasi Setoran Sampah (Diterima / Ditolak) oleh Pengurus RT
     */
    public function verifikasi(Request $request, $id)
    {
        // Validasi input status dari pengurus RT
        $request->validate([
            'status' => 'required|in:Diterima,Ditolak',
            'deskripsi' => 'nullable|string'
        ]);

        // Mulai Database Transaction untuk memastikan integritas data (ACID)
        DB::beginTransaction();

        try {
            // 1. Ambil data setoran sampah
            $setorSampah = DB::table('setor_sampah')->where('id_setor_sampah', $id)->first();

            if (!$setorSampah) {
                return response()->json(['message' => 'Data setoran tidak ditemukan'], 404);
            }

            // Pastikan data yang diverifikasi masih berstatus 'Menunggu'
            if ($setorSampah->status !== 'Menunggu') {
                return response()->json(['message' => 'Setoran sampah sudah pernah diverifikasi sebelumnya'], 400);
            }

            // 2. Update status & deskripsi pada tabel setor_sampah
            DB::table('setor_sampah')->where('id_setor_sampah', $id)->update([
                'status' => $request->status,
                'deskripsi' => $request->deskripsi,
            ]);

            // 3. Jika status Diterima, tambahkan poin ke user dan catat mutasi poin
            if ($request->status === 'Diterima') {
                $totalPoinBaru = $setorSampah->total_poin;

                // Tambahkan total poin ke tabel users milik warga terkait
                DB::table('users')
                    ->where('id_user', $setorSampah->id_user)
                    ->increment('total_poin', $totalPoinBaru);

                // Tambahkan catatan ke riwayat mutasi_poin warga
                DB::table('mutasi_poin')->insert([
                    'id_user' => $setorSampah->id_user,
                    'id_setor_sampah' => $id,
                    'jenis_transaksi' => 'Masuk',
                    'nominal_poin' => $totalPoinBaru,
                    'nilai_konversi_rp' => 0, // Isikan nilai konversi rupiah jika ada aturan tertentu
                    'keterangan' => 'Poin masuk dari penyetoran sampah #' . $id,
                    'tanggal' => now()->toDateString()
                ]);
            }

            // Commit transaksi jika semua query berhasil
            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Setoran sampah berhasil diverifikasi dengan status: ' . $request->status
            ], 200);

        } catch (\Exception $e) {
            // Batalkan semua perubahan jika terjadi error di tengah jalan
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat memproses verifikasi',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
