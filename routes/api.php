<?php

use App\Http\Controllers\RoistatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/emailtracking', [RoistatController::class, 'webhookHandle']);
