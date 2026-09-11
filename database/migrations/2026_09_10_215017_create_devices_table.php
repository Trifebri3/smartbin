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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('device_id')->unique(); // e.g. BIN-ULTRA-001
            $table->string('name');
            $table->enum('type', ['ultrasonic', 'servo', 'camera']);
            $table->string('ip_address')->nullable();
            $table->enum('status', ['ONLINE', 'WARNING', 'OFFLINE'])->default('OFFLINE');
            $table->timestamp('last_seen_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
