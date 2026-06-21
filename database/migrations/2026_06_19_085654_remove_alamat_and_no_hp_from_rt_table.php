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
        Schema::table('rt', function (Blueprint $table) {
            // Menghapus kolom alamat dan no_hp
            $table->dropColumn(['alamat', 'no_hp']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rt', function (Blueprint $table) {
            // Mengembalikan kolom jika migration di-rollback (opsional tapi disarankan)
            $table->string('alamat', 100)->nullable();
            $table->string('no_hp', 15)->nullable();
        });
    }
};