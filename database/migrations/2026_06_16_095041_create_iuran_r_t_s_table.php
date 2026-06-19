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
        Schema::create('iuran_rt', function (Blueprint $table) {
            $table->id('id_iuran'); // BigInteger, PK, Auto-Increment
            
            // Foreign Key ke tabel users (Warga yang membayar)
            $table->foreignId('id_user')->constrained('users', 'id_user')->onDelete('cascade');
            
            // Foreign Key ke tabel mutasi_poin (Nullable, jika bayar pakai potongan poin)
            $table->foreignId('id_transaksi')->nullable()->constrained('mutasi_poin', 'id_transaksi')->onDelete('set null');
            
            $table->string('periode', 20); // Contoh: "Juni 2026"
            $table->integer('nominal_iuran')->default(0); // Nominal sebelum diskon
            $table->integer('diskon_poin')->default(0); // Potongan dari penukaran poin (Rp)
            $table->integer('total_bayar')->default(0); // Nominal Iuran - Diskon Poin
            $table->enum('status_bayar', ['Belum Bayar', 'Sudah Bayar'])->default('Belum Bayar');
            $table->date('tanggal_bayar')->nullable(); // Nullable jika belum dibayar
            
            // Foreign Key ke tabel users (Pengurus RT yang menginput/mengonfirmasi)
            $table->foreignId('dibuat_oleh')->constrained('users', 'id_user')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Diubah ke 'iuran_rt' tanpa akhiran 's' atau 'r_t_s'
        Schema::dropIfExists('iuran_rt');
    }
};