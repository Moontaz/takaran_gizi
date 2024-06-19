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
        Schema::create('gizi3', function (Blueprint $table) {
            $table->id('id_gizi3');
            $table->integer('kalsium')->default(0);
            $table->integer('fosfor')->default(0);
            $table->integer('magnesium')->default(0);
            $table->double('besi')->default(0);
            $table->integer('iodium')->default(0);
            $table->double('seng')->default(0);
            $table->integer('selenium')->default(0);
            $table->double('mangan')->default(0);
            $table->double('fluor')->default(0);
            $table->double('kromium')->default(0);
            $table->integer('kalium')->default(0);
            $table->integer('natrium')->default(0);
            $table->integer('klor')->default(0);
            $table->integer('tembaga')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gizi3');
    }
};
