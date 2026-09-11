<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\ServoCommand;

class ServoApiController extends Controller
{
    /**
     * ESP Polling to check pending commands
     */
    public function getPendingCommands(Request $request)
    {
        $request->validate([
            'device_id' => 'required|string'
        ]);

        $device = Device::where('device_id', $request->device_id)->first();

        if (!$device) {
            return response()->json(['message' => 'Device not found'], 404);
        }

        $commands = ServoCommand::where('device_id', $device->id)
            ->where('status', 'pending')
            ->orderBy('id', 'asc')
            ->get();

        return response()->json([
            'data' => $commands
        ]);
    }

    /**
     * ESP sends acknowledgment that command executed
     */
    public function acknowledge(Request $request, $id)
    {
        $command = ServoCommand::find($id);

        if (!$command) {
            return response()->json(['message' => 'Command not found'], 404);
        }

        $command->update([
            'status' => 'executed',
            'executed_at' => now()
        ]);

        return response()->json(['message' => 'Acknowledgment received']);
    }
}
