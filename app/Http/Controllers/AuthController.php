<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use App\Models\RT;

class AuthController extends Controller
{
    private function getStats()
    {
        $jumlahWarga = Users::where('role', 'warga')->count();

        $totalSampah = DB::table('detail_setor_sampah')
            ->join('setor_sampah', 'detail_setor_sampah.id_setor_sampah', '=', 'setor_sampah.id_setor_sampah')
            ->where('setor_sampah.status', 'Selesai')
            ->sum('detail_setor_sampah.berat_kg') ?? 0;

        return [
            'jumlahWarga' => $jumlahWarga,
            'totalSampah' => $totalSampah
        ];
    }

    public function showLogin()
    {
        $stats = $this->getStats();
        return view('auth.login', [
            'jumlahWarga' => $stats['jumlahWarga'],
            'totalSampah' => $stats['totalSampah']
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required'    => 'Email tidak boleh kosong!',
            'email.email'       => 'Format email tidak valid!',
            'password.required' => 'Password tidak boleh kosong!',
        ]);

        if (Auth::attempt($credentials, (bool) $request->input('remember'))) {
            $request->session()->regenerate();
            $user = Auth::user();

            if ($user->role === 'Admin') {
                return redirect()->route('admin.dashboard')->with('success', 'Selamat datang Admin!');
            }
            if ($user->role === 'Pengurus RT') {
                return redirect()->route('pengurus-rt.dashboard')->with('success', 'Selamat datang Pengurus RT!');
            }
            if ($user->role === 'Warga') {
                return redirect()->route('warga.dashboard')->with('success', 'Selamat datang di PointWaste!');
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ])->onlyInput('email');
    }

    public function showRegister()
    {
        $daftar_rt = RT::all(); 
        $stats = $this->getStats();
        return view('auth.register', [
            'daftar_rt' => $daftar_rt,
            'jumlahWarga' => $stats['jumlahWarga'],
            'totalSampah' => $stats['totalSampah']
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        Users::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'Warga',
            'total_poin' => 0,
        ]);

        return redirect()->route('showLogin')->with('success', 'Registrasi berhasil! Silakan masuk menggunakan akun Anda.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'Anda telah berhasil keluar dari sistem.');
    }
}