<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DeviceApiController;
use App\Http\Controllers\Api\UltrasonicApiController;
use App\Http\Controllers\Api\ServoApiController;

// ESP APIs (Diberi middleware otentikasi Sanctum jika perlu, 
// tapi untuk saat ini karena ESP mengirim BEARER token manual, 
// kita abaikan middleware dulu agar mudah dites, atau pasang auth:sanctum nanti)

Route::prefix('v1')->group(function () {
    // Heartbeat
    Route::post('/device/heartbeat', [DeviceApiController::class, 'heartbeat']);
    
    // Ultrasonic
    Route::post('/ultrasonic', [UltrasonicApiController::class, 'store']);
    
    // Servo
    Route::get('/servo/commands', [ServoApiController::class, 'getPendingCommands']);
    Route::post('/servo/commands/{id}/ack', [ServoApiController::class, 'acknowledge']);
});
