<?php

namespace App\Models;

// Menggunakan Authenticatable bawaan Laravel agar model 'Users' tetap bisa dipakai untuk sistem Login/Auth
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'foto',
        'status', // Menambahkan kolom status agar bisa diisi saat membuat user baru
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

    /*
    |--------------------------------------------------------------------------
    | RELASI MODEL (ELOQUENT RELATIONS)
    |--------------------------------------------------------------------------
    */

    /**
     * RELASI: Seorang user memiliki banyak transaksi setor sampah.
     */
    public function setorSampah(): HasMany
    {
        // 'id_user' di parameter kedua adalah Foreign Key di tabel setor_sampah
        // 'id_user' di parameter ketiga adalah Primary Key di tabel users
        return $this->hasMany(SetorSampah::class, 'id_user', 'id_user');
    }

    /**
     * RELASI: Seorang warga (user) memiliki banyak tagihan/catatan iuran RT.
     */
    public function iuranWarga(): HasMany
    {
        return $this->hasMany(IuranRt::class, 'id_user', 'id_user');
    }

    /**
     * RELASI: Seorang Pengurus RT (user) bisa membuat/mengonfirmasi banyak tagihan iuran RT.
     */
    public function iuranDibuat(): HasMany
    {
        // 'dibuat_oleh' adalah Foreign Key di tabel iuran_rt yang merujuk ke id_user pengurus
        return $this->hasMany(IuranRt::class, 'dibuat_oleh', 'id_user');
    }

    /**
     * RELASI: Seorang user (jika driver session menggunakan database) memiliki banyak data session.
     */
    public function sessions(): HasMany
    {
        return $this->hasMany(Session::class, 'user_id', 'id_user');
    }

    /**
     * RELASI: User berstatus 'Warga' atau 'Pengurus RT' berada di bawah naungan sebuah RT.
     * (Asumsi nama Model untuk RT Anda nantinya adalah 'Rt')
     */
    public function rt(): BelongsTo
    {
        return $this->belongsTo(RT::class, 'id_rt', 'id_rt');
    }

    public function mutasiPoin(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(MutasiPoin::class, 'id_user', 'id_user');
    }
}