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
        Schema::create('kelompok_umur', function (Blueprint $table) {
            $table->id('id_kel');
            $table->integer('batas_awal')->nullable();
            $table->integer('batas_akhir')->nullable();
            $table->string('bulan_tahun', 5)->nullable();
            $table->string('status', 9)->nullable();
            $table->unsignedBigInteger('id_gizi1');
            $table->unsignedBigInteger('id_gizi2');
            $table->unsignedBigInteger('id_gizi3');
            $table->timestamps();

            $table->foreign('id_gizi1')->references('id_gizi1')->on('gizi1');
            $table->foreign('id_gizi2')->references('id_gizi2')->on('gizi2');
            $table->foreign('id_gizi3')->references('id_gizi3')->on('gizi3');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelompok_umur');
    }
};

