<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\IuranRt;

class IuranWargaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userId = $user->id_user;

        $riwayatIuran = IuranRt::where('id_user', $userId)
            ->orderBy('periode', 'desc')
            ->paginate(10);

        $iuranBelumLunas = IuranRt::where('id_user', $userId)
            ->where('status_bayar', '!=', 'Lunas')
            ->orderBy('periode', 'asc')
            ->get();

        return view('warga.tagihan-iuran', compact('user', 'riwayatIuran', 'iuranBelumLunas'));
    }
}

