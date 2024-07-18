<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComposerController;
use App\Http\Controllers\RouteController;

// Route::get('/', function () {
//     return view('modules.index.index');
// });

Route::get('/', [RouteController::class, 'index']);

// routes/web.php
Route::get('/composer-install', [ComposerController::class, 'install'])->middleware('auth');

