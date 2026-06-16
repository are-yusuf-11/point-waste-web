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
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            
            // Sudah benar: Terpaku ke tabel 'users' dan kolom 'id_user'
            $table->foreignId('id_user')
                ->nullable()
                ->index()
                ->constrained('users', 'id_user') 
                ->onDelete('cascade'); 
                
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // PERBAIKAN DI SINI: Nama tabel harus sama dengan yang di-create di atas
        Schema::dropIfExists('sessions');
    }
};