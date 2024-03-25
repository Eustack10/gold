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
        Schema::create('jellewery_lots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jelleweries_id');
            $table->unsignedBigInteger('lots_id');
            $table->timestamps();

            $table->foreign('jelleweries_id')->references('id')->on('jelleweries')->cascadeOnDelete();
            $table->foreign('lots_id')->references('id')->on('lots')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jellewery_lots');
    }
};
