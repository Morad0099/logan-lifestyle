<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComposerController;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php
Route::get('/composer-install', [ComposerController::class, 'install'])->middleware('auth');

