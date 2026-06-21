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
        // Pastikan tabel 'rt' memiliki kolom 'id_user' sebelum mencoba menghapusnya
        if (Schema::hasColumn('rt', 'id_user')) {
            Schema::table('rt', function (Blueprint $table) {
                // 1. Hapus foreign key menggunakan array nama kolom (lebih aman daripada menulis string nama constraint)
                $table->dropForeign(['id_user']);

                // 2. Baru hapus kolom id_user
                $table->dropColumn('id_user');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rt', function (Blueprint $table) {
            if (!Schema::hasColumn('rt', 'id_user')) {
                $table->foreignId('id_user')->nullable()->constrained('users', 'id_user')->onDelete('cascade');
            }
        });
    }
};