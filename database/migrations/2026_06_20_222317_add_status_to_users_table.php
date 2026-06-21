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
            // Menambahkan kolom status bertipe boolean (tinyint 1)
            // Default diatur ke true (1) artinya otomatis aktif saat pengguna terdaftar
            // Diletakkan tepat setelah kolom 'role' agar struktur tabel rapi
            $table->boolean('status')->default(true)->after('role');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Menghapus kolom status jika migration di-rollback
            $table->dropColumn('status');
        });
    }
};