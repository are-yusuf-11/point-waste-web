<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MutasiPoin extends Model
{
    use HasFactory;

    /**
     * Kunci nama tabel di database agar tidak dibaca 'mutasi_poins'
     */
    protected $table = 'mutasi_poin';

    /**
     * Kunci nama Primary Key bawaan karena menggunakan 'id_transaksi'
     */
    protected $primaryKey = 'id_transaksi';

    /**
     * Field yang diizinkan untuk diisi secara massal (Mass Assignment)
     */
    protected $fillable = [
        'id_user',
        'id_setor_sampah',
        'jenis_transaksi',
        'nominal_poin',
        'nilai_konversi_rp',
        'keterangan',
        'tanggal',
    ];

    /**
     * Cast data otomatis untuk mempermudah manipulasi tipe data numerik dan tanggal
     */
    protected $casts = [
        'nominal_poin' => 'integer',
        'nilai_konversi_rp' => 'integer',
        'tanggal' => 'date',
    ];

    /*
    |--------------------------------------------------------------------------
    | RELASI MODEL (ELOQUENT RELATIONS)
    |--------------------------------------------------------------------------
    */

    /**
     * RELASI: Setiap catatan mutasi poin dicatat untuk satu orang User (Warga).
     */
    public function user(): BelongsTo
    {
        // 'id_user' di parameter kedua adalah Foreign Key di tabel mutasi_poin
        // 'id_user' di parameter ketiga adalah Primary Key di tabel users
        return $this->belongsTo(Users::class, 'id_user', 'id_user');
    }

    /**
     * RELASI: Mutasi poin (opsional) terhubung ke transaksi penyetoran sampah tertentu.
     */
    public function setorSampah(): BelongsTo
    {
        // 'id_setor_sampah' di parameter kedua adalah Foreign Key di tabel mutasi_poin
        // 'id_setor_sampah' di parameter ketiga adalah Primary Key di tabel setor_sampah
        return $this->belongsTo(SetorSampah::class, 'id_setor_sampah', 'id_setor_sampah');
    }
}