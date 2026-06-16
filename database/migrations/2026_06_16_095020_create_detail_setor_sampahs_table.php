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
        Schema::create('detail_setor_sampah', function (Blueprint $table) {
            $table->id('id_detail_setor_sampah'); // BigInteger, PK, Auto-Increment
            
            // Foreign Key ke tabel setor_sampah
            $table->foreignId('id_setor_sampah')->constrained('setor_sampah', 'id_setor_sampah')->onDelete('cascade');
            
            // Foreign Key ke tabel kategori_sampah
            $table->foreignId('id_kategori')->constrained('kategori_sampah', 'id_kategori')->onDelete('cascade');
            
            // Tipe float/decimal dengan total 8 digit dan 2 digit di belakang koma (contoh: 12.34)
            $table->float('berat_kg', 8, 2); 
            
            $table->integer('poin_subtotal')->default(0); // Hasil perkalian berat_kg * poin_per_kg
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Diubah ke 'detail_setor_sampah' tanpa akhiran 's'
        Schema::dropIfExists('detail_setor_sampah');
    }
};