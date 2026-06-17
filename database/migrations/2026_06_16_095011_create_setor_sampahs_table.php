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
        Schema::create('setor_sampah', function (Blueprint $table) {
            $table->id('id_setor_sampah'); // BigInteger, PK, Auto-Increment
            
            // Foreign Key yang menghubungkan transaksi ini ke tabel users (Warga)
            $table->foreignId('id_user')->constrained('users', 'id_user')->onDelete('cascade');
            
            $table->date('tgl_setor');
            $table->string('foto_sampah', 100)->nullable(); // nullable() jika foto opsional
            $table->enum('status', ['Menunggu', 'Diterima', 'Ditolak'])->default('Menunggu'); // default menunggu konfirmasi
            $table->integer('total_poin')->default(0); // Nilai default 0
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Diubah ke 'setor_sampah' tanpa akhiran 's'
        Schema::dropIfExists('setor_sampah');
    }
};