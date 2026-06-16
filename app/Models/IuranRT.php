<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IuranRT extends Model
{
    use HasFactory;

    /**
     * Kunci nama tabel di database agar tidak dibaca 'iuran_r_t_s' atau 'iuran_rts'
     */
    protected $table = 'iuran_rt';

    /**
     * Kunci nama Primary Key bawaan karena menggunakan 'id_iuran'
     */
    protected $primaryKey = 'id_iuran';

    /**
     * Field yang diizinkan untuk diisi secara massal (Mass Assignment)
     */
    protected $fillable = [
        'id_user',
        'id_transaksi',
        'periode',
        'nominal_iuran',
        'diskon_poin',
        'total_payar',
        'status_bayar',
        'tanggal_bayar',
        'dibuat_oleh',
    ];

    /**
     * Cast data otomatis untuk mempermudah manipulasi tipe data angka desimal/integer dan tanggal
     */
    protected $casts = [
        'nominal_iuran' => 'integer',
        'diskon_poin' => 'integer',
        'total_payar' => 'integer',
        'tanggal_bayar' => 'date',
    ];
}