<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailSetorSampah; 
use App\Models\KategoriSampah; // Import Model KategoriSampah Baru
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriSampahController extends Controller
{
    public function index()
    {
        // 1. Ambil data semua kategori menggunakan Model Eloquent agar cast boolean status_aktif terbaca sempurna
        $kategori = KategoriSampah::all()->map(function ($kat) {
            $totalBerat = DetailSetorSampah::where('id_kategori', $kat->id_kategori)->sum('berat_kg');
            $kat->total_disetor_kg = $totalBerat;
            return $kat;
        });

        // 2. Hitung statistik ringkasan untuk Bento Grid (Card Atas)
        $totalKategori = KategoriSampah::count();
        
        // Menghitung total poin yang beredar dari setoran sampah
        $totalPoinBeredar = DetailSetorSampah::sum('poin_subtotal'); 

        // Mencari kategori terpopuler berdasarkan jumlah frekuensi transaksi setoran terbanyak
        $terpopulerId = DetailSetorSampah::select('id_kategori', DB::raw('count(*) as total'))
            ->groupBy('id_kategori')
            ->orderByDesc('total')
            ->first();
            
        $kategoriTerpopuler = '-';
        if ($terpopulerId) {
            $populer = KategoriSampah::find($terpopulerId->id_kategori);
            $kategoriTerpopuler = $populer ? $populer->nama_kategori : '-';
        }

        return view('admin.kategori-sampah', compact(
            'kategori', 
            'totalKategori', 
            'totalPoinBeredar', 
            'kategoriTerpopuler'
        ));
    }

    /**
     * Menampilkan halaman form tambah kategori master
     */
    public function create()
    {
        return view('admin.tambah-kategori');
    }

    /**
     * Memproses penyimpanan data kategori sampah baru ke database
     */
    public function store(Request $request)
    {
        // Validasi input data dari form
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'poin_per_kg' => 'required|integer|min:0',
            'deskripsi' => 'nullable|string',
            'status_aktif' => 'required|boolean',
        ]);

        // Simpan data menggunakan Mass Assignment model KategoriSampah
        KategoriSampah::create([
            'nama_kategori' => $request->nama_kategori,
            'poin_per_kg' => $request->poin_per_kg,
            'deskripsi' => $request->deskripsi,
            'status_aktif' => (bool)$request->status_aktif,
        ]);

        // Alihkan kembali ke halaman utama kategori sampah dengan alert sukses
        return redirect()->route('admin.kategori-sampah')->with('success', 'Kategori sampah master berhasil ditambahkan!');
    }

    /**
     * Menampilkan halaman form edit kategori sampah
     */
    public function edit($id)
    {
        // Cari data kategori berdasarkan Primary Key (id_kategori)
        $category = KategoriSampah::findOrFail($id);

        return view('admin.edit-kategori', compact('category'));
    }

    /**
     * Memproses pembaharuan data kategori sampah ke database
     */
    public function update(Request $request, $id)
    {
        // Validasi input data
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'poin_per_kg' => 'required|integer|min:0',
            'deskripsi' => 'nullable|string',
            'status_aktif' => 'required|boolean',
        ]);

        $category = KategoriSampah::findOrFail($id);
        
        // Update data ke database
        $category->update([
            'nama_kategori' => $request->nama_kategori,
            'poin_per_kg' => $request->poin_per_kg,
            'deskripsi' => $request->deskripsi,
            'status_aktif' => (bool)$request->status_aktif,
        ]);

        return redirect()->route('admin.kategori-sampah')->with('success', 'Kategori sampah master berhasil diperbarui!');
    }
}