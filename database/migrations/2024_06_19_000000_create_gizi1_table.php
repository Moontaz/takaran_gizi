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
        Schema::create('gizi1', function (Blueprint $table) {
            $table->id('id_gizi1');
            $table->integer('energi')->default(0);
            $table->integer('protein')->default(0);
            $table->integer('total_lemak')->default(0);
            $table->integer('omega3')->default(0);
            $table->integer('omega6')->default(0);
            $table->integer('karbohidrat')->default(0);
            $table->integer('serat')->default(0);
            $table->integer('air')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gizi1');
    }
};
