<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function (){
    Route::apiResource('timeslots', \App\Http\Controllers\TimeSlotController::class);
    Route::apiResource('vehicles', \App\Http\Controllers\VehicleController::class);
    Route::apiResource('bookings', \App\Http\Controllers\BookingController::class);
});
