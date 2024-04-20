<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->integer('pemilik');
            $table->integer('sekolah');
            $table->string('tahun')->nullable();
            $table->string('nama')->nullable();
            $table->string('jenisKelamin')->nullable();
            $table->string('nip')->nullable();
            $table->string('statusPNS')->nullable();
            $table->string('sertifikasi')->nullable();
            $table->string('bidangStudi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru');
    }
};
