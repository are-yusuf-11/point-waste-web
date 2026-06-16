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
        Schema::create('kategori_sampah', function (Blueprint $table) {
            $table->id('id_kategori'); // BigInteger, PK, Auto-Increment sesuai kesepakatan
            $table->string('nama_kategori', 30); // Contoh: Plastik, Kertas, Logam
            $table->string('deskripsi', 100)->nullable(); // nullable() dipakai jika deskripsi boleh dikosongkan
            $table->integer('poin_per_kg'); // Nilai poin tiap 1 kg sampah
            $table->boolean('status_aktif')->default(true); // Menggunakan boolean (1 = Aktif, 0 = Tidak Aktif)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Disesuaikan menjadi 'kategori_sampah' tanpa akhiran 's' karena nama tabel di up() adalah 'kategori_sampah'
        Schema::dropIfExists('kategori_sampah'); 
    }
};