<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Session extends Model
{
    use HasFactory;

    // Karena nama tabelnya 'sessions' (jamak), Laravel sudah tahu otomatis.
    // Tapi karena ID-nya berupa string acak (bukan integer), kita wajib set properti ini:
    protected $keyType = 'string';
    public $incrementing = false;

    // Nonaktifkan timestamps karena tabel sessions hanya pakai kolom last_activity
    public $timestamps = false;

    /**
     * Kolom yang boleh diisi secara massal.
     */
    protected $fillable = [
        'id',
        'user_id',
        'ip_address',
        'user_agent',
        'payload',
        'last_activity',
    ];

    /**
     * RELASI: Session ini dimiliki oleh siapa?
     * Menghubungkan kembali ke model User yang menggunakan 'id_user'
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}