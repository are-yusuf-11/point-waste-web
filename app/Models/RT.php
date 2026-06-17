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
}
