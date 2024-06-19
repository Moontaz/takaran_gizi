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
        Schema::create('gizi2', function (Blueprint $table) {
            $table->id('id_gizi2');
            $table->integer('vitA')->default(0);
            $table->integer('vitD')->default(0);
            $table->integer('vitE')->default(0);
            $table->integer('vitK')->default(0);
            $table->integer('vitB1')->default(0);
            $table->integer('vitB2')->default(0);
            $table->integer('vitB3')->default(0);
            $table->integer('vitB5')->default(0);
            $table->integer('vitB6')->default(0);
            $table->integer('folat')->default(0);
            $table->integer('vitB12')->default(0);
            $table->integer('biotin')->default(0);
            $table->integer('kolin')->default(0);
            $table->integer('vitC')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gizi2');
    }
};
