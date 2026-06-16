<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user'); // Menggunakan id_user sebagai BigInteger PK
            $table->string('nama', 50); // Mengubah 'name' menjadi 'nama' sesuai rancanganmu
            $table->string('email', 50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255); // Dibuat 255 agar aman untuk hashing Laravel
            
            // --- KUSTOM FIELD TAMBAHAN DARI RANCANGAN KAMU ---
            $table->enum('role', ['Admin', 'Pengurus RT', 'Warga']);
            $table->string('no_hp', 15)->nullable();
            $table->text('alamat')->nullable();
            $table->bigInteger('total_poin')->default(0);
            $table->foreignId('id_rt')->nullable(); // Foreign Key opsional untuk relasi ke tabel RT nanti
            // --------------------------------------------------

            $table->rememberToken();
            $table->timestamps();
        });

        // Bawaan Laravel untuk fitur Reset Password (Jangan dihapus)
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        // Bawaan Laravel jika kamu menggunakan session berbasis database (Jangan dihapus)
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            // Disesuaikan ke 'id_user' karena primary key tabel users di atas diubah menjadi id_user
            $table->foreignId('id_user')->nullable()->index(); 
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};