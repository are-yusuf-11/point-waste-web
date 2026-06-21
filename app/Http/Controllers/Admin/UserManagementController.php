<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Users; // Import model Users
use Illuminate\Http\Request;
use App\Models\RT;

class UserManagementController extends Controller
{
    public function index()
    {
        // Mengambil semua user beserta data RT-nya, diurutkan dari yang terbaru
        $users = Users::with('rt')->latest()->get();

        // Hitung ringkasan data untuk card atas
        $totalUsers = Users::count();
        $totalWarga = Users::where('role', 'warga')->count();
        $totalPengurusRt = Users::where('role', 'LIKE', '%pengurus%')->count();

        // Mengirim data ke view
        // Mengirim data ke view bersama dengan variabel statistik card atas
        return view('admin.manajemen-pengguna', compact('users', 'totalUsers', 'totalWarga', 'totalPengurusRt'));
    }

    public function create()
    {
        // Mengambil data wilayah RT untuk dropdown pilihan di form
        $daftarRt = RT::all(); 
        return view('admin.tambah-pengguna', compact('daftarRt'));
    }

    public function store(Request $request)
    {
        // Validasi data input form
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6',
            'role' => 'required|string',
            'no_hp' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
            'id_rt' => 'nullable|integer',
        ]);

        // Simpan ke database menggunakan model Users
        Users::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password, // Otomatis ter-hash karena cast 'password' => 'hashed' di Model Users
            'role' => $request->role,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'id_rt' => $request->id_rt,
            'total_poin' => 0, // Default awal 0 poin
        ]);

        return redirect()->route('admin.manajemen-pengguna')->with('success', 'Pengguna baru berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Cari data user berdasarkan id_user
        $user = Users::findOrFail($id);
        
        // Ambil data RT untuk dropdown pilihan wilayah
        $daftarRt = RT::all(); 
        
        return view('admin.edit-pengguna', compact('user', 'daftarRt'));
    }

    public function update(Request $request, $id)
    {
        $user = Users::findOrFail($id);

        // Validasi data input form (email unique kecuali untuk user ini sendiri)
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id_user . ',id_user',
            'password' => 'nullable|string|min:6', // Password boleh kosong jika tidak diganti
            'role' => 'required|string',
            'no_hp' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
            'id_rt' => 'nullable|integer',
        ]);

        // Siapkan data yang akan di-update
        $dataUpdate = [
            'nama' => $request->nama,
            'email' => $request->email,
            'role' => $request->role,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'id_rt' => $request->id_rt,
        ];

        // Jika password diisi, ikut update passwordnya
        if ($request->filled('password')) {
            $dataUpdate['password'] = $request->password; // Otomatis ter-hash oleh cast model Users
        }

        // Eksekusi update data ke database
        $user->update($dataUpdate);

        return redirect()->route('admin.manajemen-pengguna')->with('success', 'Data pengguna berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Cari data pengguna berdasarkan id_user
        $user = Users::findOrFail($id);
        
        // Eksekusi penghapusan data dari database
        $user->delete();

        // Kembalikan ke halaman manajemen dengan pesan sukses
        return redirect()->route('admin.manajemen-pengguna')->with('success', 'Pengguna berhasil dihapus!');
    }

    public function toggleStatus($id)
    {
        // Cari data user berdasarkan ID
        $user = Users::findOrFail($id);
        
        // Balikkan nilai boolean status (jika true/1 menjadi false/0, dan sebaliknya)
        $user->status = !$user->status;
        $user->save();
        
        // Tentukan pesan sukses berdasarkan kondisi terbaru
        $pesan = $user->status ? 'diaktifkan' : 'dinonaktifkan';
        
        return redirect()->back()->with('success', 'Akun ' . $user->nama . ' berhasil ' . $pesan . '!');
    }
}