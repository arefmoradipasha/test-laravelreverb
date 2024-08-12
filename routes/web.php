<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/send-event', [TestController::class, 'sendTestEvent']);
Route::get('/send-event2', [TestController::class, 'sendTestEvent2']);
