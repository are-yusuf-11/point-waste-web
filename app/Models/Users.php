<?php

namespace App\Models;

// Menggunakan Authenticatable bawaan Laravel agar model 'Users' tetap bisa dipakai untuk sistem Login/Auth
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Kunci nama tabel di database agar tidak otomatis terbaca sebagai 'userses'
     */
    protected $table = 'users';

    /**
     * Kunci nama Primary Key bawaan karena kita mengubahnya menjadi 'id_user'
     */
    protected $primaryKey = 'id_user';

    /**
     * Field yang diizinkan untuk diisi secara massal (Mass Assignment)
     */
    protected $fillable = [
        'nama',
        'email',
        'password',
        'role',
        'no_hp',
        'alamat',
        'total_poin',
        'id_rt',
    ];

    /**
     * Field yang harus disembunyikan saat data model diubah menjadi Array atau JSON (demi keamanan)
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Cast data otomatis dari Laravel (bawaan sistem autentikasi)
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed', // Otomatis meng-hash password saat disimpan
        ];
    }
}