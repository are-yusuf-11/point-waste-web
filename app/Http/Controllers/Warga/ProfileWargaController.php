<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\RT;

class ProfileWargaController extends Controller
{
    /**
     * Tampilan Halaman Profil Utama
     */
    public function index()
    {
        $user = Auth::user();
        $daftarRT = RT::all();

        return view('warga.profil-saya', compact('user', 'daftarRT'));
    }

    /**
     * Memproses Update Informasi Pribadi, Email, dan Foto Profil
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        // 1. JIKA REQUEST DATANG DARI MODAL UBAH EMAIL
        if ($request->has('email')) {
            $request->validate([
                'email' => 'required|email|max:255|unique:users,email,' . $user->id_user . ',id_user',
                'password_verification' => 'required',
            ], [
                'email.required' => 'Email baru tidak boleh kosong!',
                'email.unique' => 'Email ini sudah digunakan oleh warga lain!',
                'password_verification.required' => 'Masukkan kata sandi akun untuk memverifikasi perubahan email!',
            ]);

            if (!Hash::check($request->password_verification, $user->password)) {
                return back()->with('error', 'Kata sandi salah! Gagal memperbarui email.');
            }

            $user->update(['email' => $request->email]);
            return redirect()->back()->with('success', 'Email utama berhasil diperbarui!');
        }

        // 2. JIKA REQUEST DATANG DARI FORM UTAMA (INFORMASI PRIBADI & FOTO PROFIL)
        $request->validate([
            'nama'        => 'required|string|max:255',
            'no_hp'       => 'nullable|string|max:15',
            'alamat'      => 'nullable|string',
            'id_rt'       => 'nullable|exists:rt,id_rt',
            'foto_profil' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'nama.required' => 'Nama lengkap wajib diisi!',
            'foto_profil.max' => 'Ukuran foto profil tidak boleh melebihi 2MB!'
        ]);

        // Siapkan payload data teks
        $updateData = [
            'nama'   => $request->nama,
            'no_hp'  => $request->no_hp,
            'alamat' => $request->alamat,
            'id_rt'  => $request->id_rt,
        ];

        // LOGIKA HAPUS FOTO (Jika user menekan tombol Hapus Foto)
        if ($request->input('hapus_foto_flag') == '1') {
            if ($user->foto && Storage::disk('public')->exists($user->foto)) {
                Storage::disk('public')->delete($user->foto);
            }
            $updateData['foto'] = null; // Set nilai kolom foto di DB menjadi NULL
        } 
        // LOGIKA UPLOAD FOTO BARU
        elseif ($request->hasFile('foto_profil')) {
            if ($user->foto && Storage::disk('public')->exists($user->foto)) {
                Storage::disk('public')->delete($user->foto);
            }
            $path = $request->file('foto_profil')->store('foto_profil', 'public');
            $updateData['foto'] = $path;
        }

        $user->update($updateData);

        return redirect()->back()->with('success', 'Informasi pribadi dan foto profil berhasil diperbarui!');
    }

    /**
     * Memproses Perubahan Kata Sandi Akun (Dipanggil via Modal)
     */
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'current_password.required' => 'Kata sandi saat ini wajib diisi!',
            'password.required' => 'Kata sandi baru wajib diisi!',
            'password.min' => 'Kata sandi baru minimal harus 8 karakter!',
            'password.confirmed' => 'Konfirmasi kata sandi baru tidak cocok!'
        ]);

        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->with('error', 'Kata sandi lama yang Anda masukkan salah!');
        }

        Auth::user()->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->back()->with('success', 'Kata sandi akun Anda berhasil diperbarui!');
    }
}