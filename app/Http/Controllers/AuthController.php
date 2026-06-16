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
    /**
     * Fungsi Helper Internal untuk Mengambil Statistik Umum
     */
    private function getStats()
    {
        // 1. Menghitung jumlah user dengan role 'warga'
        $jumlahWarga = Users::where('role', 'warga')->count();

        // 2. Menghitung total berat sampah (kg) dari detail setoran yang berstatus 'Selesai'
        $totalSampah = DB::table('detail_setor_sampah')
            ->join('setor_sampah', 'detail_setor_sampah.id_setor_sampah', '=', 'setor_sampah.id_setor_sampah')
            ->where('setor_sampah.status', 'Selesai')
            ->sum('detail_setor_sampah.berat_kg');

        return [
            'jumlahWarga' => $jumlahWarga,
            'totalSampah' => $totalSampah
        ];
    }

    /**
     * Menampilkan Halaman Login beserta Statistik
     */
    public function showLogin()
    {
        $stats = $this->getStats();

        return view('auth.login', [
            'jumlahWarga' => $stats['jumlahWarga'],
            'totalSampah' => $stats['totalSampah']
        ]);
    }

    /**
     * Proses Logika Login (Multi-Aktor)
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],  [
        'username.required' => 'Email atau password tidak boleh kosong!',
        'email.email'       => 'Format email yang Anda masukkan tidak valid.',
        'password.required' => 'Email atau password tidak boleh kosong!',
        ]);

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->intended(route('admin.index'))->with('success', 'Selamat datang Admin!');
            } 
            
            if ($user->role === 'pengurus_rt') {
                return redirect()->intended(route('pengurus_rt.index'))->with('success', 'Selamat datang Pengurus RT!');
            } 
            
            if ($user->role === 'warga') {
                return redirect()->intended(route('warga.dashboard'))->with('success', 'Selamat datang di PointWaste!');
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ])->onlyInput('email');
    }

    /**
     * Menampilkan Halaman Register beserta Daftar RT dan Statistik
     */
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

    /**
     * Proses Pendaftaran Akun Warga Baru
     */
    public function register(Request $request)
    {
        $request->validate([
            'id_rt' => 'required|exists:rt,id_rt', 
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed', 
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string',
        ]);

        $user = Users::create([
            'id_rt' => $request->id_rt,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
            'role' => 'warga', 
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'total_poin' => 0, 
        ]);

        Auth::login($user);

        return redirect()->route('warga.dashboard')->with('success', 'Registrasi berhasil! Akun Anda siap digunakan.');
    }

    /**
     * Proses Logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Anda telah berhasil keluar dari sistem.');
    }
}