<?php

namespace App\Http\Controllers\PengurusRT;

use App\Http\Controllers\Controller;
use App\Models\SetorSampah;
use App\Models\IuranRT;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\DB;

class DashboardRTController extends Controller
{
   /**
     * Menampilkan halaman Dashboard Pengurus RT.
     */
    public function index()
    {
        // 1. Menghitung total warga binaan (User dengan role 'Warga')
        $jumlahWargaBinaan = Users::where('role', 'Warga')->count();

        // 2. Menghitung jumlah setoran sampah yang berstatus 'Menunggu' verifikasi
        $verifikasiPending = SetorSampah::where('status', 'Menunggu')->count();

        // 3. Menghitung total nota tagihan iuran yang telah dibuat
        $totalTagihan = IuranRt::count();

        // 4. Menghitung total dana iuran masuk (akumulasi nominal dari iuran yang sudah lunas/terbayar)
        // Berdasarkan kolom status_bayar pada tabel iuran_rt
        $totalDanaMasuk = IuranRt::where('status_bayar', 'Lunas')->sum('nominal_iuran');

        // 5. Mengambil list data setoran sampah terbaru yang statusnya masih 'Menunggu' (Pending)
        // Disertai dengan eager loading relasi 'warga' (ke tabel users)
        $recentSetoranPending = SetorSampah::with('warga')
            ->where('status', 'Menunggu')
            ->orderBy('tgl_setor', 'desc')
            ->take(5) // Batasi hanya menampilkan 5 data terbaru di dashboard
            ->get();

        // Mengirimkan semua variabel ke file view blade dashboard pengurus
        return view('pengurus.dashboard', compact(
            'jumlahWargaBinaan',
            'verifikasiPending',
            'totalTagihan',
            'totalDanaMasuk',
            'recentSetoranPending'
        ));
    }

    /**
     * Fitur Aksi Cepat: Memproses verifikasi setoran sampah (Terima/Tolak) langsung dari Dashboard
     */
    public function verifikasiSetoran(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Diterima,Ditolak',
        ]);

        DB::beginTransaction();
        try {
            $setorSampah = SetorSampah::findOrFail($id);
            
            // Update status setoran sampah
            $setorSampah->status = $request->status;
            $setorSampah->save();

            // Jika diterima, tambahkan total_poin dari setoran tersebut ke total poin milik user/warga terkait
            if ($request->status === 'Diterima') {
                $warga = Users::findOrFail($setorSampah->id_user);
                $warga->total_poin += $setorSampah->total_poin;
                $warga->save();

                // Catatan opsional: Di sini Anda juga bisa menyisipkan pembuatan record baru 
                // ke tabel `mutasi_poin` sebagai histori penambahan poin warga.
            }

            DB::commit();
            return redirect()->route('pengurus-rt.dashboard')
                ->with('success', 'Status setoran sampah berhasil diperbarui menjadi ' . $request->status . '.');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('pengurus-rt.dashboard')
                ->with('error', 'Terjadi kesalahan saat memproses verifikasi: ' . $e->getMessage());
        }
    }
}
