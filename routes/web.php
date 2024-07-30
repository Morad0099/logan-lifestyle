<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ComposerController;

// Route::get('/', function () {
//     return view('modules.index.index');
// });

Route::get('/', [RouteController::class, 'index'])->name('home');
Route::get('/wedding', [RouteController::class, 'wedding'])->name('wedding');
Route::get('/arts', [RouteController::class, 'arts'])->name('arts');
Route::get('/dance', [RouteController::class, 'dance'])->name('dance');
Route::get('/meditation', [RouteController::class, 'meditation'])->name('meditaion');
Route::get('/about_us', [RouteController::class, 'aboutUs'])->name('about_us');
Route::post('/events', [BookingController::class, 'store'])->name('events.store');
Route::post('/dance_event', [BookingController::class, 'dance'])->name('dance.store');
Route::post('/wedding_event', [BookingController::class, 'wedding'])->name('wedding.store');
Route::post('/meditation_event', [BookingController::class, 'meditation'])->name('meditation.store');
// routes/web.php
Route::get('/composer-install', [ComposerController::class, 'install'])->middleware('auth');
Route::get('lang/{locale}', [ComposerController::class, 'switchLang'])->name('lang.switch');


/**Admin Routes */
Route::get('/admin/login', [RouteController::class, 'login'])->name('admin.login');
Route::post('admin/Login', [AdminController::class, 'login']);
Route::middleware(['auth'])->group(function () {
    Route::get('admin/dashboard', [RouteController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/bookings', [RouteController::class, 'bookings'])->name('admin.bookings');
    Route::get('/admin/staff', [RouteController::class, 'staff'])->name('admin.staff');
    Route::get('/admin/password', [RouteController::class, 'password'])->name('admin.password');
    Route::post('admin/logout', [AdminController::class, 'logout'])->name('logout');
});
