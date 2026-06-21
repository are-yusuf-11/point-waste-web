<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriSampah extends Model
{
    use HasFactory;

    /**
     * Kunci nama tabel di database agar tidak otomatis terbaca sebagai 'kategori_sampahs'
     */
    protected $table = 'kategori_sampah';

    /**
     * Kunci nama Primary Key bawaan karena kita menggunakan 'id_kategori'
     */
    protected $primaryKey = 'id_kategori';

    /**
     * Field yang diizinkan untuk diisi secara massal (Mass Assignment)
     */
    protected $fillable = [
        'nama_kategori',
        'deskripsi',
        'poin_per_kg',
        'status_aktif',
    ];

    /**
     * Cast data otomatis agar status_aktif dibaca sebagai boolean (true/false) di Laravel
     */
    protected $casts = [
        'status_aktif' => 'boolean',
    ];

    public function detailSetoran(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(DetailSetorSampah::class, 'id_kategori', 'id_kategori');
    }
}