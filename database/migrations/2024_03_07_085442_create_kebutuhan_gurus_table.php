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
        Schema::create('kebutuhan_guru', function (Blueprint $table) {
            $table->id();
            $table->integer('pemilik');
            $table->integer('sekolah');
            $table->string('tahun')->nullable();
            $table->string('mataPelajaran')->nullable();
            $table->string('jumlahDibutuhkan')->nullable();
            $table->string('jumlahSaatIni')->nullable();
            $table->string('lebihKurang')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kebutuhan_guru');
    }
};
