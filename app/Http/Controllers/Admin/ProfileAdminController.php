<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileAdminController extends Controller
{
    /**
     * Menampilkan halaman profil admin
     */
    public function index()
    {
        // Ambil data admin yang sedang login saat ini
        $admin = auth()->user();

        return view('admin.profil-saya', compact('admin'));
    }

    /**
     * Memproses pembaruan data profil dan password admin
     */
    public function update(Request $request)
    {
        $adminId = auth()->user()->id_user;
        $admin = Users::findOrFail($adminId);

        // Validasi input form profil
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $adminId . ',id_user',
            'no_hp' => 'nullable|string|max:15',
            'alamat' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'current_password' => 'nullable|required_with:new_password',
            'new_password' => 'nullable|string|min:8|confirmed',
        ]);

        // 1. Logika pembaruan password (jika diisi)
        if ($request->filled('new_password')) {
            if (!Hash::check($request->current_password, $admin->password)) {
                return redirect()->back()->withErrors(['current_password' => 'Password lama yang Anda masukkan salah.']);
            }
            $admin->password = Hash::make($request->new_password);
        }

        // 2. Logika unggah foto profil baru
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada dan bukan gambar default google
            if ($admin->foto && !str_contains($admin->foto, 'googleusercontent.com')) {
                Storage::disk('public')->delete($admin->foto);
            }

            // Simpan foto profil baru ke folder storage/app/public/profile-pictures
            $path = $request->file('foto')->store('profile-pictures', 'public');
            $admin->foto = $path;
        }

        // 3. Perbarui field data teks lainnya
        $admin->nama = $request->nama;
        $admin->email = $request->email;
        $admin->no_hp = $request->no_hp;
        $admin->alamat = $request->alamat;
        $admin->save();

        return redirect()->route('admin.profil-saya')->with('success', 'Profil admin Anda berhasil diperbarui!');
    }
}