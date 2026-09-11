<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\UltrasonicReading;
use App\Events\UltrasonicUpdated;
use App\Events\DeviceUpdated;

class UltrasonicApiController extends Controller
{
    /**
     * Store ultrasonic reading from ESP8266 (4 sensors)
     */
    public function store(Request $request)
    {
        $request->validate([
            'device_id' => 'required|string',
            'distance_1' => 'nullable|numeric',
            'fill_percentage_1' => 'nullable|numeric',
            'distance_2' => 'nullable|numeric',
            'fill_percentage_2' => 'nullable|numeric',
            'distance_3' => 'nullable|numeric',
            'fill_percentage_3' => 'nullable|numeric',
            'distance_4' => 'nullable|numeric',
            'fill_percentage_4' => 'nullable|numeric',
        ]);

        $device = Device::where('device_id', $request->device_id)->first();

        if (!$device) {
            return response()->json(['message' => 'Device not found'], 404);
        }

        // Update device status as ONLINE since it sent data
        $device->update([
            'last_seen_at' => now(),
            'status' => 'ONLINE'
        ]);

        broadcast(new DeviceUpdated($device));

        // Create reading
        $reading = UltrasonicReading::create([
            'device_id' => $device->id,
            'distance_1' => $request->distance_1,
            'distance_2' => $request->distance_2,
            'distance_3' => $request->distance_3,
            'distance_4' => $request->distance_4,
            'fill_1' => $request->fill_percentage_1,
            'fill_2' => $request->fill_percentage_2,
            'fill_3' => $request->fill_percentage_3,
            'fill_4' => $request->fill_percentage_4,
        ]);

        // Broadcast to Reverb
        broadcast(new UltrasonicUpdated($reading));

        return response()->json(['message' => 'Data recorded successfully', 'id' => $reading->id]);
    }
}
