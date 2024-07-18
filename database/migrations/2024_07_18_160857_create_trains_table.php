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
        Schema::create('trains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company', 255);
            $table->string('departure_station', 255);
            $table->string('arrival_station', 255);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code', 50);
            $table->tinyInteger('no_carriages');
            $table->boolean('onTime');
            $table->boolean('cancelled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
