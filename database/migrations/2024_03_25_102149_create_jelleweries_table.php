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
        Schema::create('jelleweries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gems_id');
            $table->string('pcs')->nullable();
            $table->integer('weight');
            $table->integer('price');
            $table->integer('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jelleweries');
    }
};
