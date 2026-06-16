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
        Schema::create('mutasi_poin', function (Blueprint $table) {
            $table->id('id_transaksi'); // BigInteger, PK, Auto-Increment
            
            // Foreign Key ke tabel users
            $table->foreignId('id_user')->constrained('users', 'id_user')->onDelete('cascade');
            
            // Foreign Key ke tabel setor_sampah (Dibuat nullable karena tidak semua mutasi berasal dari setor sampah)
            $table->foreignId('id_setor_sampah')->nullable()->constrained('setor_sampah', 'id_setor_sampah')->onDelete('set null');
            
            $table->enum('jenis_transaksi', ['Masuk', 'Keluar']); // Masuk = tambah poin, Keluar = tukar poin
            $table->integer('nominal_poin')->default(0);
            $table->integer('nilai_konversi_rp')->default(0); // Hasil konversi poin ke Rupiah
            $table->string('keterangan', 100);
            $table->date('tanggal'); // Tanggal terjadinya mutasi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Diubah ke 'mutasi_poin' tanpa akhiran 's'
        Schema::dropIfExists('mutasi_poin');
    }
};