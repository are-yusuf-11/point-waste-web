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
        Schema::table('users', function (Blueprint $table) {
            // Menambahkan kolom foto tipe string size 255 setelah kolom id_rt
            // nullable() digunakan agar user lama atau user baru tidak wajib langsung mengisi foto saat daftar
            $table->string('foto', 255)->nullable()->after('id_rt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Menghapus kolom foto jika dilakukan rollback migration
            $table->dropColumn('foto');
        });
    }
};