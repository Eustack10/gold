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
        Schema::create('gems_lots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gems_id');
            $table->unsignedBigInteger('lots_id');
            $table->timestamps();

            $table->foreign('gems_id')->references('id')->on('gems');
            $table->foreign('lots_id')->references('id')->on('lots');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gems_lots');
    }
};
