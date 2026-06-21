<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Users;

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

    public function user(): BelongsTo
    {
        // Parameter ke-2: 'user_id' adalah Foreign Key di tabel sessions
        // Parameter ke-3: 'id_user' adalah Primary Key di tabel users
        // Pastikan nama modelnya 'Users' (pakai 's') sesuai dengan nama file model Anda
        return $this->belongsTo(Users::class, 'user_id', 'id_user');
    }
}