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
        Schema::create('ultrasonic_readings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('device_id')->constrained('devices')->onDelete('cascade');
            $table->float('distance_1')->nullable();
            $table->float('distance_2')->nullable();
            $table->float('distance_3')->nullable();
            $table->float('distance_4')->nullable();
            $table->float('fill_1')->nullable();
            $table->float('fill_2')->nullable();
            $table->float('fill_3')->nullable();
            $table->float('fill_4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ultrasonic_readings');
    }
};
