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
        Schema::table('setor_sampah', function (Blueprint $table) {
            // Menambahkan kolom deskripsi tipe text dan opsional (nullable)
            // after('foto_sampah') digunakan agar posisinya di database berada setelah kolom foto_sampah
            $table->text('deskripsi')->nullable()->after('foto_sampah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('setor_sampah', function (Blueprint $table) {
            // Menghapus kembali kolom deskripsi jika migration di-rollback
            $table->dropColumn('deskripsi');
        });
    }
};