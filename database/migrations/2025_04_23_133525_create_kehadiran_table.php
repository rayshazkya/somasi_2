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
        Schema::create('kehadiran', function (Blueprint $table) {
            $table->id('id_kehadiran');
            $table->unsignedBigInteger('id_anggota'); // FK
            $table->unsignedBigInteger('id_kegiatan'); // FK
            $table->string('status_kehadiran');
            $table->timestamps();

            $table->foreign('id_anggota')->references('id_anggota')->on('anggota')->onDelete('cascade');
            $table->foreign('id_kegiatan')->references('id_kegiatan')->on('kegiatan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kehadiran');
    }
};
