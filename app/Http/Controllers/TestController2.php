<?php

namespace App\Http\Controllers;

use App\Events\TestEvent;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function sendTestEvent()
    {
        $message = "Hello, this is a test message!";
        event(new TestEvent($message));

        return response()->json(['status' => 'Event sent!']);
    }
    
}
