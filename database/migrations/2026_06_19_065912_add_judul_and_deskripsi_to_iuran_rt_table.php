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
        Schema::table('iuran_rt', function (Blueprint $table) {
            // Judul bersifat WAJIB (tidak pakai nullable), kita letakkan setelah id_transaksi
            $table->string('judul', 100)->after('id_transaksi');
            
            // Deskripsi bersifat OPSIONAL (memakai nullable), diletakkan setelah judul
            $table->text('deskripsi')->nullable()->after('judul');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('iuran_rt', function (Blueprint $table) {
            // Menghapus kembali kolom jika migration di-rollback
            $table->dropColumn(['judul', 'deskripsi']);
        });
    }
};