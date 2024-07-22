<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComposerController;
use App\Http\Controllers\RouteController;

// Route::get('/', function () {
//     return view('modules.index.index');
// });

Route::get('/', [RouteController::class, 'index'])->name('home');
Route::get('/wedding', [RouteController::class, 'wedding'])->name('wedding');
Route::get('/arts', [RouteController::class, 'arts'])->name('arts');
Route::get('/dance', [RouteController::class, 'dance'])->name('dance');
Route::get('/meditation', [RouteController::class, 'meditation'])->name('meditaion');

// routes/web.php
Route::get('/composer-install', [ComposerController::class, 'install'])->middleware('auth');

