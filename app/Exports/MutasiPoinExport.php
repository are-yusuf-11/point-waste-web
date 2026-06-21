<?php

namespace App\Exports;

use App\Models\MutasiPoin;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MutasiPoinExport implements FromQuery, WithHeadings, WithMapping
{
    public function query()
    {
        // Hanya ambil data mutasi poin milik warga yang sedang login
        return MutasiPoin::where('id_user', Auth::id())->orderBy('tanggal', 'desc');
    }

    // Mengatur Judul Kolom di Excel
    public function headings(): array
    {
        return ['Tanggal', 'Keterangan', 'Kategori', 'Jenis', 'Nominal Poin'];
    }

    // Memetakan isi data ke kolom Excel
    public function map($mutasi): array
    {
        return [
            $mutasi->tanggal->format('d-m-Y H:i'),
            $mutasi->keterangan,
            $mutasi->kategori,
            $mutasi->jenis_transaksi,
            ($mutasi->jenis_transaksi == 'Masuk' ? '+' : '-') . $mutasi->nominal_poin
        ];
    }
}