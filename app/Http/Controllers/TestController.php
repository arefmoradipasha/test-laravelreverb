<?php

namespace App\Http\Controllers;

use App\Events\TestEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function sendTestEvent(Request $request)
    {
        try {
            $message = $request->input('message', 'Hello, this is a test message!');
            event(new TestEvent($message));

            return response()->json(['status' => 'Event sent!']);
        } catch (\Exception $e) {
            // Log the error message
            Log::error('Error sending event: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()] );
            // return response()->json(['error' => 'Server error'], 500);
            // return $e->getMessage();

        }
    }
}
