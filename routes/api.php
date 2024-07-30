<?php

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/get_chart', [AdminController::class, 'getChart']);
Route::post('/add_staff', [AdminController::class, 'addStaff']);
Route::post('/update_staff', [AdminController::class, 'updateStaff']);
Route::delete('delete_staff', [AdminController::class, 'deleteStaff']);
Route::post('/update_password', [AdminController::class, 'updatePassword']);