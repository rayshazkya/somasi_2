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
        Schema::create('keuangan', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->date('tanggal');
            $table->enum('jenis_transaksi', ['pemasukan', 'pengeluaran']);
            $table->integer('jumlah');
            $table->text('deskripsi');
            $table->unsignedBigInteger('dicatat_oleh');
            $table->timestamps();

            $table->foreign('dicatat_oleh')->references('id_anggota')->on('anggota')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keuangan');
    }
};
