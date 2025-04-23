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
    Schema::create('akun_pengguna', function (Blueprint $table) {
        $table->id('id_akun'); // Primary Key
        $table->string('username');
        $table->string('password');
        $table->enum('role', ['dph', 'bendahara', 'ketua_divisi', 'anggota_divisi']);
        $table->rememberToken();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akun_pengguna');
    }
};