<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Users;
use App\Models\RT;

class AuthController extends Controller
{
    private function getStats()
    {
        // Menambahkan query() agar tidak merah di VS Code
        $jumlahWarga = Users::query()->where('role', 'warga')->count();

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
        // Disimpan ke variabel agar validasi terbaca bersih
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        Users::query()->create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => 'Warga',
            'id_rt' => $validated['id_rt'],
            'total_poin' => 0,
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan masuk menggunakan akun Anda.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'Anda telah berhasil keluar dari sistem.');
    }

    public function showForgotPassword()
    {
        return view('auth.forgot_password');
    }

    public function sendVerificationCode(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users,email']
        ], [
            'email.exists' => 'Email ini belum terdaftar di sistem kami!'
        ]);

        $code = rand(100000, 999999);

        session([
            'forgot_email' => $request->email,
            'forgot_code'  => $code,
            'forgot_expires_at' => now()->addMinutes(10)
        ]);

        Log::info("Kode OTP Lupa Password PointWaste untuk {$request->email} adalah: {$code}");

        return redirect()->route('auth.show-verify')->with('success', 'Kode verifikasi OTP baru telah dikirim! Silakan periksa kotak masuk email Anda.');
    }

    public function showVerifyForm()
    {
        if (!session()->has('forgot_email')) {
            return redirect()->route('auth.forgot-password')->with('error', 'Silakan masukkan email Anda kembali.');
        }

        return view('auth.verify-otp');
    }

    public function submitResetPassword(Request $request)
    {
        $request->validate([
            'code'     => ['required', 'numeric'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ], [
            'code.required' => 'Kode verifikasi wajib diisi!',
            'password.confirmed' => 'Konfirmasi password baru tidak cocok!'
        ]);

        $sessionEmail = session('forgot_email');
        $sessionCode  = session('forgot_code');
        $sessionExpiry = session('forgot_expires_at');

        if (!$sessionExpiry || now()->greaterThan($sessionExpiry)) {
            session()->forget(['forgot_email', 'forgot_code', 'forgot_expires_at']);
            return redirect()->route('auth.forgot-password')->with('error', 'Kode verifikasi telah kedaluwarsa. Silakan ajukan ulang.');
        }

        if ($request->code != $sessionCode) {
            return back()->with('error', 'Kode verifikasi yang Anda masukkan salah! Periksa kembali email Anda.')->withInput();
        }

        $user = Users::query()->where('email', $sessionEmail)->firstOrFail();
        
        // Menggunakan method save() atau update() bawaan model setelah dicari
        $user->update([
            'password' => Hash::make($request->password)
        ]);

        session()->forget(['forgot_email', 'forgot_code', 'forgot_expires_at']);

        return redirect()->route('login')->with('success', 'Password Anda berhasil diperbarui! Silakan masuk dengan password baru.');
    }
}