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
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id('id_kegiatan');
            $table->string('nama_kegiatan');
            $table->date('tanggal');
            $table->string('status_kegiatan');
            $table->unsignedBigInteger('id_divisi'); // FK ke Divisi
            $table->text('deskripsi')->nullable();
            $table->timestamps();

            $table->foreign('id_divisi')->references('id_divisi')->on('divisi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan');
    }
};
