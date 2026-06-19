<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetorSampah extends Model
{
    use HasFactory;

    /**
     * Kunci nama tabel di database agar tidak dibaca 'setor_sampahs' atau 'setor_sampah_s'
     */
    protected $table = 'setor_sampah';

    /**
     * Kunci nama Primary Key bawaan karena menggunakan 'id_setor_sampah'
     */
    protected $primaryKey = 'id_setor_sampah';

    /**
     * Field yang diizinkan untuk diisi secara massal (Mass Assignment)
     */
    protected $fillable = [
        'id_user',
        'tgl_setor',
        'foto_sampah',
        'deskripsi',
        'status',
        'total_poin',
    ];

    /**
     * Cast data otomatis agar field tgl_setor dimanipulasi sebagai objek Date di Laravel
     */
    protected $casts = [
        'tgl_setor' => 'date',
    ];


    /*
    |--------------------------------------------------------------------------
    | RELASI MODEL (ELOQUENT RELATIONS)
    |--------------------------------------------------------------------------
    */

    /**
     * RELASI: Setiap transaksi setor sampah dimiliki atau dilakukan oleh satu User (Warga).
     */
    public function user(): BelongsTo
    {
        // 'id_user' di parameter kedua adalah Foreign Key di tabel setor_sampah
        // 'id_user' di parameter ketiga adalah Primary Key di tabel users
        return $this->belongsTo(Users::class, 'id_user', 'id_user');
    }

    public function detailItems(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(DetailSetorSampah::class, 'id_setor_sampah', 'id_setor_sampah');
    }
    
}