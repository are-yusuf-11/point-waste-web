<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Jika belum login, tendang ke halaman login resmi
        if (!Auth::check()) {
            // langsung redirect ke URL /login
            return redirect('/login');
        }

        $userRole = Auth::user()->role;
        
        // Menggunakan trim() untuk menghapus '/' di awal atau akhir prefix secara otomatis
        $currentUri = trim($request->route()->getPrefix(), '/');

        // 2. Logika otomatis mencocokkan URL Prefix dengan Role User
        // Mengantisipasi jika route tersebut memang merupakan bagian dari grup ber-prefix
        if ($currentUri === 'admin' && $userRole !== 'admin') {
            return $this->redirectBasedOnRole($userRole);
        }

        if ($currentUri === 'pengurus-rt' && $userRole !== 'pengurus_rt') {
            return $this->redirectBasedOnRole($userRole);
        }

        if ($currentUri === 'warga' && $userRole !== 'warga') {
            return $this->redirectBasedOnRole($userRole);
        }

        return $next($request);
    }

    /**
     * Fungsi pembantu untuk memulangkan user ke dashboard masing-masing jika salah alamat
     */
    private function redirectBasedOnRole($role)
    {
        if ($role === 'admin') {
            return redirect()->route('admin.dashboard')->with('error', 'Anda tidak memiliki akses ke halaman tersebut.');
        }
        if ($role === 'pengurus_rt') {
            return redirect()->route('pengurus_rt.dashboard')->with('error', 'Anda tidak memiliki akses ke halaman tersebut.');
        }
        if ($role === 'warga') {
            return redirect()->route('warga.dashboard')->with('error', 'Anda tidak memiliki akses ke halaman tersebut.');
        }
        return redirect('/')->with('error', 'Akses ditolak.');
    }
}