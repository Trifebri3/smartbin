<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Device;
use App\Events\DeviceUpdated;

class DeviceApiController extends Controller
{
    /**
     * Handle device heartbeat
     */
    public function heartbeat(Request $request)
    {
        $request->validate([
            'device_id' => 'required|string',
            'firmware_version' => 'nullable|string'
        ]);

        $device = Device::where('device_id', $request->device_id)->first();

        if (!$device) {
            return response()->json(['message' => 'Device not found'], 404);
        }

        $device->update([
            'last_seen_at' => now(),
            'status' => 'ONLINE'
        ]);

        // Broadcast event for UI
        broadcast(new DeviceUpdated($device));

        return response()->json(['message' => 'Heartbeat received']);
    }
}
