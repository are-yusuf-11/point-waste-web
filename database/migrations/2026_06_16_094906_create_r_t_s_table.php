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
        Schema::create('rt', function (Blueprint $table) {
            $table->id('id_rt'); // Menggunakan id_rt sebagai BigInteger PK, Auto-Increment
            
            // Foreign Key ke tabel users (untuk Pengurus RT pengelola)
            // constrained() memberi tahu Laravel bahwa kolom ini tersambung ke tabel 'users' pada kolom 'id_user'
            $table->foreignId('id_user')->constrained('users', 'id_user')->onDelete('cascade');
            
            $table->string('no_rt', 10); // Contoh: "RT 05"
            $table->string('kelurahan', 30);
            $table->string('kecamatan', 30);
            $table->string('alamat', 100); // Alamat sekretariat RT
            $table->string('no_hp', 15); // Nomor telepon kontak RT
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rt');
    }
};