<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    // 1. Menampilkan halaman profil warga saat ini
    public function index()
    {
        $user = Auth::user();
        return view('warga.profile.index', compact('user'));
    }

    // 2. Menampilkan halaman form edit profil
    public function edit()
    {
        $user = Auth::user();
        return view('warga.profile.edit', compact('user'));
    }

    // 3. Memproses update data profil (Nama, Email, No. Telp, dll)
// 3. Memproses update data profil (Nama, Email, No. Telp, dll)
    public function update(Request $request)
    {
        // Ambil data user langsung tembak menggunakan model 'Users' Anda berdasarkan ID login
        $user = \App\Models\Users::findOrFail(\Illuminate\Support\Facades\Auth::id());

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                \Illuminate\Validation\Rule::unique('user')->ignore($user->id), // Nama tabel tunggal sesuai aturan
            ],
            'no_telp' => 'nullable|string|max:15',
            'alamat' => 'nullable|string|max:255',
        ]);

        // Proses update ke database
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('warga.profile.index')->with('success', 'Profil Anda berhasil diperbarui!');
    }

    // 4. Memproses update keamanan (Ganti Password)
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|current_password', 
            'password' => 'required|string|min:8|confirmed', 
        ]);

        // Ambil data user langsung tembak menggunakan model 'Users' Anda berdasarkan ID login
        $user = \App\Models\Users::findOrFail(\Illuminate\Support\Facades\Auth::id());
        
        $user->update([
            'password' => \Illuminate\Support\Facades\Hash::make($request->password),
        ]);

        return redirect()->route('warga.profile.index')->with('success', 'Password Anda berhasil diubah!');
    }
}