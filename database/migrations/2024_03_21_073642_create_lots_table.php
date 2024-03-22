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
        Schema::create('lots', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->unsignedBigInteger('gems_id');
            $table->string('name');
            $table->integer('weight');
            $table->string('unit');
            $table->integer('gram');
            $table->string('unit_price');
            $table->string('price');
            $table->string('amount');
            $table->string('cert_no');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lots');
    }
};
