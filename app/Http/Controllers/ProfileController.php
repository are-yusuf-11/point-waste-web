<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;

class ProfileController extends Controller
{
    /**
     * Route::get('/profile')
     * Menampilkan halaman profil user yang sedang login
     */
    public function index()
    {
        // Mengambil data user yang sedang login (bisa Warga, Pengurus RT, atau Admin)
        $user = Auth::user();

        // Mengarahkan ke file view resources/views/profile/index.blade.php
        return view('profile.index', compact('user'));
    }

    /**
     * Route::put('/profile')
     * Memperbarui data profil dasar (Nama, No HP, Alamat)
     */
    public function update(Request $request)
    {
        // 1. Ambil data user yang sedang aktif
        $user = Users::find(Auth::id());

        // 2. Validasi input sesuai dengan atribut tabel USERS di ERD Anda
        $request->validate([
            'nama'   => ['required', 'string', 'max:255'],
            'no_hp'  => ['required', 'string', 'max:15'],
            'alamat' => ['required', 'string'],
        ]);

        // 3. Update data ke database
        $user->update([
            'nama'   => $request->nama,
            'no_hp'  => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        // 4. Kembali ke halaman profil dengan pesan sukses
        return redirect()->route('profile.index')->with('success', 'Profil Anda berhasil diperbarui!');
    }

    /**
     * Route::get('/password/ganti')
     * Menampilkan form ganti password
     */
    public function editPassword()
    {
        return view('profile.ganti-password'); // resources/views/profile/ganti-password.blade.php
    }

    /**
     * Route::put('/password/ganti')
     * Memproses penggantian password user
     */
    public function updatePassword(Request $request)
    {
        // 1. Validasi kecocokan input password baru
        $request->validate([
            'password_lama' => ['required'],
            'password'      => ['required', 'string', 'min:8', 'confirmed'], // password baru wajib matching dengan password_confirmation
        ]);

        $user = Users::find(Auth::id());

        // 2. Cek apakah password lama yang dimasukkan cocok dengan yang ada di database
        if (!Hash::check($request->password_lama, $user->password)) {
            return back()->withErrors([
                'password_lama' => 'Password lama yang Anda masukkan tidak sesuai.'
            ]);
        }

        // 3. Jalankan update password baru (Jangan lupa di-hash!)
        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('profile.index')->with('success', 'Password Anda berhasil diganti!');
    }
}