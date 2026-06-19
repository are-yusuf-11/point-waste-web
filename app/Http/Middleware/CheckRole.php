<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('showLogin');
        }

        $userRole = Auth::user()->role;
        $currentUri = trim($request->route()->getPrefix(), '/');

        if ($currentUri === 'admin' && $userRole !== 'Admin') {
            return $this->redirectBasedOnRole($userRole);
        }

        if ($currentUri === 'pengurus-rt' && $userRole !== 'Pengurus RT') {
            return $this->redirectBasedOnRole($userRole);
        }

        if ($currentUri === 'warga' && $userRole !== 'Warga') {
            return $this->redirectBasedOnRole($userRole);
        }

        return $next($request);
    }

    private function redirectBasedOnRole($role)
    {
        if ($role === 'Admin') {
            return redirect()->route('admin.dashboard')->with('error', 'Anda tidak memiliki akses ke halaman tersebut.');
        }
        if ($role === 'Pengurus RT') {
            return redirect()->route('pengurus_rt.dashboard')->with('error', 'Anda tidak memiliki akses ke halaman tersebut.');
        }
        if ($role === 'Warga') {
            return redirect()->route('warga.dashboard')->with('error', 'Anda tidak memiliki akses ke halaman tersebut.');
        }
        return redirect('/')->with('error', 'Akses ditolak.');
    }
}