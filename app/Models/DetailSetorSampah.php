<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailSetorSampah extends Model
{
    use HasFactory;

    /**
     * Kunci nama tabel di database agar tidak dibaca 'detail_setor_sampahs'
     */
    protected $table = 'detail_setor_sampah';

    /**
     * Kunci nama Primary Key bawaan karena menggunakan 'id_detail_setor_sampah'
     */
    protected $primaryKey = 'id_detail_setor_sampah';

    /**
     * Field yang diizinkan untuk diisi secara massal (Mass Assignment)
     */
    protected $fillable = [
        'id_setor_sampah',
        'id_kategori',
        'berat_kg',
        'poin_subtotal',
    ];

    /**
     * Cast data otomatis agar tipe data berat_kg tetap dibaca sebagai float/angka desimal di PHP
     */
    protected $casts = [
        'berat_kg' => 'float',
        'poin_subtotal' => 'integer',
    ];

    /*
    |--------------------------------------------------------------------------
    | RELASI MODEL (ELOQUENT RELATIONS)
    |--------------------------------------------------------------------------
    */

    /**
     * RELASI: Setiap baris detail item dimiliki oleh satu transaksi induk SetorSampah.
     */
    public function setorSampah(): BelongsTo
    {
        // 'id_setor_sampah' di parameter kedua adalah Foreign Key di tabel detail_setor_sampah
        // 'id_setor_sampah' di parameter ketiga adalah Primary Key di tabel setor_sampah
        return $this->belongsTo(SetorSampah::class, 'id_setor_sampah', 'id_setor_sampah');
    }

    /**
     * RELASI: Setiap baris detail item merujuk ke satu KategoriSampah (misal: Plastik / Kertas).
     */
    public function kategoriSampah(): BelongsTo
    {
        // 'id_kategori' di parameter kedua adalah Foreign Key di tabel detail_setor_sampah
        // 'id_kategori' di parameter ketiga adalah Primary Key di tabel kategori_sampah
        return $this->belongsTo(KategoriSampah::class, 'id_kategori', 'id_kategori');
    }
}