<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RT extends Model
{
    use HasFactory;

    /**
     * Kunci nama tabel di database agar tidak otomatis terbaca sebagai 'rts' atau 'rt_s'
     */
    protected $table = 'rt';

    /**
     * Kunci nama Primary Key bawaan karena kita menggunakan 'id_rt'
     */
    protected $primaryKey = 'id_rt';

    /**
     * Field yang diizinkan untuk diisi secara massal (Mass Assignment)
     */
    protected $fillable = [
        'id_user',
        'no_rt',
        'kelurahan',
        'kecamatan',
        'alamat',
        'no_hp',
    ];

    /*
    |--------------------------------------------------------------------------
    | RELASI MODEL (ELOQUENT RELATIONS)
    |--------------------------------------------------------------------------
    */

    /**
     * RELASI: Setiap data RT dikelola oleh satu orang Pengurus RT (User).
     */
    public function pengurus(): BelongsTo
    {
        // 'id_user' di parameter kedua adalah Foreign Key di tabel rt
        // 'id_user' di parameter ketiga adalah Primary Key di tabel users
        return $this->belongsTo(Users::class, 'id_user', 'id_user');
    }

    /**
     * RELASI: Satu RT memiliki banyak Anggota Warga (Users).
     */
    public function warga(): HasMany
    {
        // 'id_rt' di parameter kedua adalah Foreign Key di tabel users
        // 'id_rt' di parameter ketiga adalah Primary Key di tabel rt
        return $this->hasMany(Users::class, 'id_rt', 'id_rt');
    }
}
