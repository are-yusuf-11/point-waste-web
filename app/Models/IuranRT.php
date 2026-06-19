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
        'judul',
        'deskripsi',
        'periode',
        'nominal_iuran',
        'diskon_poin',
        'total_bayar',
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

    /*
    |--------------------------------------------------------------------------
    | RELASI MODEL (ELOQUENT RELATIONS)
    |--------------------------------------------------------------------------
    */

    /**
     * RELASI: Setiap data iuran ditujukan untuk satu orang Warga (Users).
     */
    public function warga(): BelongsTo
    {
        // 'id_user' di parameter kedua adalah Foreign Key di tabel iuran_rt
        // 'id_user' di parameter ketiga adalah Primary Key di tabel users
        return $this->belongsTo(Users::class, 'id_user', 'id_user');
    }

    /**
     * RELASI: Iuran RT bisa terhubung dengan satu catatan transaksi mutasi poin (jika dibayar menggunakan poin).
     */
    public function mutasiPoin(): BelongsTo
    {
        // 'id_transaksi' di parameter kedua adalah Foreign Key di tabel iuran_rt
        // 'id_transaksi' di parameter ketiga adalah Primary Key di tabel mutasi_poin
        return $this->belongsTo(MutasiPoin::class, 'id_transaksi', 'id_transaksi');
    }

    /**
     * RELASI: Tagihan iuran ini dibuat atau dikonfirmasi oleh seorang Pengurus RT (Users).
     */
    public function pembuat(): BelongsTo
    {
        // 'dibuat_oleh' adalah Foreign Key di tabel iuran_rt yang mencatat id_user milik pengurus RT
        // 'id_user' adalah Primary Key di tabel users
        return $this->belongsTo(Users::class, 'dibuat_oleh', 'id_user');
    }
}