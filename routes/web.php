<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\DashboardController;
// Show login page at root URL
Route::get('/', [AuthController::class, 'login'])
    ->name('admin.login');

// Handle login form submission
Route::post('/login', [AuthController::class, 'authenticate'])
    ->name('admin.authenticate');


// ==================== ADMIN PANEL ====================

Route::prefix('admin')->group(function () {

// Admin dashboard
 Route::get('/home', [DashboardController::class, 'index'])->middleware('auth')->name('admin.home');
 // Admin logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('admin.logout');

});