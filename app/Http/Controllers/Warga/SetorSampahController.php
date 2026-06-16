<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\SetorSampah;
use App\Models\DetailSetorSampah;
use App\Models\KategoriSampah;

class SetorSampahController extends Controller
{
    /**
     * Menyimpan Pengajuan Setor Sampah Beserta Rincian Detailnya
     * Sesuai dengan Atribut Tabel SETOR_SAMPAH dan DETAIL_SETOR_SAMPAH pada ERD
     */
    public function store(Request $request)
    {
        // 1. Validasi Input Form (Menyesuaikan dengan Foreign Key di ERD)
        $request->validate([
            'tgl_setor'             => ['required', 'date'],
            'foto_sampah'           => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'rincian'               => ['required', 'array', 'min:1'],
            'rincian.*.id_kategori' => ['required', 'exists:KATEGORI_SAMPAH,id_kategori'], // Sesuai nama tabel ERD
            'rincian.*.berat_kg'    => ['required', 'numeric', 'min:0.1'],
        ]);

        // 2. Gunakan Database Transaction agar eksekusi data induk & detail sinkron
        DB::beginTransaction();

        try {
            // Upload file foto sampah
            $pathFoto = $request->file('foto_sampah')->store('setor_sampah', 'public');

            // 3. Insert ke tabel induk: SETOR_SAMPAH
            // Sesuai ERD: id_setor_sampah (PK), id_user (FK), tgl_setor, foto_sampah, total_poin, status
            $setorSampah = SetorSampah::create([
                'id_user'     => Auth::user()->id_user, // Mengambil PK id_user dari tabel USERS
                'tgl_setor'   => $request->tgl_setor,
                'foto_sampah' => $pathFoto,
                'total_poin'  => 0, // Diinisialisasi 0, lalu diakumulasikan dari detail
                'status'      => 'Proses',
            ]);

            $grandTotalPoin = 0;

            // 4. Loop data rincian untuk dimasukkan ke tabel: DETAIL_SETOR_SAMPAH
            foreach ($request->rincian as $item) {
                // Ambil poin_per_kg langsung dari tabel KATEGORI_SAMPAH di database
                $kategori = KategoriSampah::where('id_kategori', $item['id_kategori'])->firstOrFail();
                
                // Hitung poin_subtotal sesuai rumus matematika sistem (berat_kg * poin_per_kg)
                $poinSubtotal = $item['berat_kg'] * $kategori->poin_per_kg;

                // Insert ke DETAIL_SETOR_SAMPAH
                // Sesuai ERD: id_detail_setor_sampah (PK), id_setor_sampah (FK), id_kategori (FK), berat_kg, poin_subtotal
                DetailSetorSampah::create([
                    'id_setor_sampah' => $setorSampah->id_setor_sampah,
                    'id_kategori'     => $item['id_kategori'],
                    'berat_kg'        => $item['berat_kg'],
                    'poin_subtotal'   => $poinSubtotal,
                ]);

                // Jumlahkan ke total poin pengajuan ini
                $grandTotalPoin += $poinSubtotal;
            }

            // 5. Update kolom total_poin di tabel induk SETOR_SAMPAH
            $setorSampah->update([
                'total_poin' => $grandTotalPoin
            ]);

            // Commit data jika seluruh alur di atas berhasil tanpa interupsi
            DB::commit();

            return redirect()->route('warga.dashboard')->with('success', 'Pengajuan setoran sampah dengan estimasi ' . number_format($grandTotalPoin, 0, ',', '.') . ' poin berhasil dikirim!');

        } catch (\Exception $e) {
            // Batalkan semua query jika ada kegagalan di tengah jalan
            DB::rollback();

            return back()->with('error', 'Gagal menyimpan pengajuan: ' . $e->getMessage())->withInput();
        }
    }
}