<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\RT;

class ProfileWargaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $daftarRT = RT::all();

        return view('warga.profil-saya', compact('user', 'daftarRT'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id_user . ',id_user',
            'no_hp' => 'nullable|string|max:15',
            'alamat' => 'nullable|string',
            'id_rt' => 'nullable|exists:rt,id_rt',
        ]);

        $user->update($request->only('nama', 'email', 'no_hp', 'alamat', 'id_rt'));

        return redirect()->back()->with('success', 'Profil berhasil diperbarui');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->with('error', 'Password saat ini tidak sesuai');
        }

        Auth::user()->update(['password' => Hash::make($request->password)]);

        return redirect()->back()->with('success', 'Password berhasil diubah');
    }
}
