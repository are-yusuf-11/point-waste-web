<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}