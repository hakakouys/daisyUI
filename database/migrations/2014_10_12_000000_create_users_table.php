<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['admin', 'dokter', 'pasien'])->default('pasien');
            $table->string('alamat')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('no_ktp')->unique()->nullable();
            
            // Atribut Khusus
            $table->string('no_rm')->unique()->nullable(); // Pasien
            $table->unsignedBigInteger('id_poli')->nullable(); // Dokter
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};