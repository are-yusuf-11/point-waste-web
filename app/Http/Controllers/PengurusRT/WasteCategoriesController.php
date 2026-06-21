<?php

namespace App\Http\Controllers\PengurusRT;

use App\Http\Controllers\Controller;
use App\Models\DetailSetorSampah;
use App\Models\KategoriSampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WasteCategoriesController extends Controller
{
    /**
     * Menampilkan daftar kategori sampah (Halaman Utama)
     */
    public function index()
    {
        // Mengambil semua data kategori sampah dari database
        $categories = KategoriSampah::all();

        // Mengirim data ke view index.blade.php
        return view('pengurus_rt.waste-categories.index', compact('categories'));
    }

    /**
     * Menampilkan form untuk membuat kategori baru
     */
    public function create()
    {
        return view('pengurus_rt.waste-categories.create');
    }

    /**
     * Menyimpan kategori baru ke database
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'name' => 'required|string|max:255|unique:waste_categories,name',
            'points_per_kg' => 'required|integer|min:0',
            'description' => 'nullable|string|max:500',
        ]);

        // Simpan data ke database
        KategoriSampah::create([
            'name' => $request->name,
            'points_per_kg' => $request->points_per_kg,
            'description' => $request->description,
        ]);

        // Redirect kembali ke halaman utama dengan pesan sukses
        return redirect()->route('rt.waste-categories.index')
            ->with('success', 'Kategori sampah baru berhasil ditambahkan!');
    }

    /**
     * Menampilkan form edit untuk kategori tertentu
     */
    public function edit($id)
    {
        $category = KategoriSampah::findOrFail($id);
        return view('pengurus_rt.waste-categories.edit', compact('category'));
    }

    /**
     * Memperbarui data kategori di database
     */
    public function update(Request $request, $id)
    {
        $category = KategoriSampah::findOrFail($id);

        // Validasi input (abaikan unique check untuk ID kategori ini sendiri)
        $request->validate([
            'name' => 'required|string|max:255|unique:waste_categories,name,' . $id,
            'points_per_kg' => 'required|integer|min:0',
            'description' => 'nullable|string|max:500',
        ]);

        // Update data
        $category->update([
            'name' => $request->name,
            'points_per_kg' => $request->points_per_kg,
            'description' => $request->description,
        ]);

        return redirect()->route('rt.waste-categories.index')
            ->with('success', 'Kategori sampah berhasil diperbarui!');
    }

    /**
     * Menghapus kategori sampah dari database
     */
    public function destroy($id)
    {
        $category = KategoriSampah::findOrFail($id);
        $category->delete();

        return redirect()->route('rt.waste-categories.index')
            ->with('success', 'Kategori sampah berhasil dihapus!');
    }
}
