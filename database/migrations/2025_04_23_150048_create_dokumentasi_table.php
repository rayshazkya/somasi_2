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
        Schema::create('dokumentasi', function (Blueprint $table) {
            $table->id('id_dokumen');
            $table->string('nama_dokumen');
            $table->string('jenis_dokumen');
            $table->timestamp('tanggal_upload')->useCurrent();
            $table->unsignedBigInteger('diunggah_oleh');
            $table->unsignedBigInteger('id_kegiatan');
            $table->timestamps();

            $table->foreign('diunggah_oleh')->references('id_anggota')->on('anggota');
            $table->foreign('id_kegiatan')->references('id_kegiatan')->on('kegiatan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumentasi');
    }
};
