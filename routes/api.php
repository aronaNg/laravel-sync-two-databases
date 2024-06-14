<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OldTableController;
use App\Http\Controllers\NewTableController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/old_table', [OldTableController::class, 'store']);
Route::put('/old_table/{id}', [OldTableController::class, 'update']);

Route::post('/new_table', [NewTableController::class, 'store']);
Route::put('/new_table/{id}', [NewTableController::class, 'update']);