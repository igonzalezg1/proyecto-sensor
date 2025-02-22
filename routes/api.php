<?php

use App\Http\Controllers\SaveDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/save-data', [SaveDataController::class, 'saveData']);
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
