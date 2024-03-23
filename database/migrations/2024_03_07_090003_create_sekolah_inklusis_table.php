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
        Schema::create('sekolah_inklusi', function (Blueprint $table) {
            $table->id();
            $table->integer('pengubah')->nullable();
            $table->string('nama');
            $table->string('npsn');
            $table->string('statusSekolah');
            $table->string('alamatSekolah');
            $table->string('kota');
            $table->string('jumlahPDBK');
            $table->string('namaPembimbing');
            $table->string('jenisKelamin');
            $table->string('pangkat');
            $table->string('alamatTinggal');
            $table->string('nomorHP');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolah_inklusi');
    }
};
