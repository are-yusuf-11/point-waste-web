<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\RT;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $daftarRT = RT::all();

        if ($user->role === 'Warga') {
            return view('warga.profil-saya', compact('user', 'daftarRT'));
        }
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        if ($request->has('email')) {
            $request->validate([
                'email' => 'required|email|max:255|unique:users,email,' . $user->id_user . ',id_user',
                'password_verification' => 'required',
            ]);

            if (!Hash::check($request->password_verification, $user->password)) {
                return back()->with('error', 'Password verification failed!');
            }

            $user->update(['email' => $request->email]);
            return redirect()->back()->with('success', 'Email updated successfully!');
        }

        $request->validate([
            'nama'        => 'required|string|max:255',
            'no_hp'       => 'nullable|string|max:15',
            'alamat'      => 'nullable|string',
            'id_rt'       => 'nullable|exists:rt,id_rt',
            'foto_profil' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $updateData = [
            'nama'   => $request->nama,
            'no_hp'  => $request->no_hp,
            'alamat' => $request->alamat,
            'id_rt'  => $request->id_rt,
        ];

        if ($request->input('hapus_foto_flag') == '1') {
            if ($user->foto && Storage::disk('public')->exists($user->foto)) {
                Storage::disk('public')->delete($user->foto);
            }
            $updateData['foto'] = null;
        } elseif ($request->hasFile('foto_profil')) {
            if ($user->foto && Storage::disk('public')->exists($user->foto)) {
                Storage::disk('public')->delete($user->foto);
            }
            $path = $request->file('foto_profil')->store('foto_profil', 'public');
            $updateData['foto'] = $path;
        }

        $user->update($updateData);

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
