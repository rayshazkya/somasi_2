<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('npm');
            $table->string('telepon');
            $table->string('email')->unique();
            $table->string('divisi');
            $table->text('alasan');
            $table->enum('role', ['admin', 'dph_role', 'bendahara_role', 'kadiv_role', 'anggota_role'])->default('anggota_role');
            $table->enum('status', ['active', 'non_active'])->default('non_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftar');
    }
};
