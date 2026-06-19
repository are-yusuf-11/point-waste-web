<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\MutasiPoin;
use Carbon\Carbon;

class MutasiPoinController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $user = Auth::user();

        $totalPoinSaatIni = $user->total_poin;

        $bulanIni = Carbon::now();
        $awalBulan = $bulanIni->copy()->startOfMonth();
        $akhirBulan = $bulanIni->copy()->endOfMonth();

        $poinDiperoleh = MutasiPoin::where('id_user', $userId)
            ->where('jenis_transaksi', 'Masuk')
            ->whereBetween('tanggal', [$awalBulan, $akhirBulan])
            ->sum('nominal_poin');

        $poinDigunakan = MutasiPoin::where('id_user', $userId)
            ->where('jenis_transaksi', 'Keluar')
            ->whereBetween('tanggal', [$awalBulan, $akhirBulan])
            ->sum('nominal_poin');

        $riwayatMutasi = MutasiPoin::where('id_user', $userId)
            ->orderBy('tanggal', 'desc')
            ->paginate(10);

        return view('warga.mutasi-poin', compact(
            'user',
            'totalPoinSaatIni',
            'poinDiperoleh',
            'poinDigunakan',
            'riwayatMutasi'
        ));
    }
}
