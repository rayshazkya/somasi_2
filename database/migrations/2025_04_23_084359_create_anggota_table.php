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
        Schema::create('anggota', function (Blueprint $table) {
            $table->unsignedBigInteger('id_anggota')->primary(); // NPM = FK ke akun_pengguna
            $table->string('nama');
            $table->string('email')->unique();
            $table->enum('status_keanggotaan', ['aktif', 'tidak_aktif']);
            $table->unsignedBigInteger('id_divisi'); // FK ke divisi
            $table->timestamps();
        
            $table->foreign('id_anggota')->references('id_akun')->on('akun_pengguna')->onDelete('cascade');
            $table->foreign('id_divisi')->references('id_divisi')->on('divisi')->onDelete('cascade');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
