<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('anggotas', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('npm');
        $table->string('divisi')->nullable();
        $table->string('jabatan')->nullable();
        $table->string('type');
        $table->string('status');
        $table->timestamps();
    });
    
}

    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
