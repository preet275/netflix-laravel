<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
// Show login page at root URL
Route::get('/', [AuthController::class, 'login'])
    ->name('admin.login');

// Handle login form submission
Route::post('/login', [AuthController::class, 'authenticate'])
    ->name('admin.authenticate');


// ADMIN PANEL 

Route::prefix('admin')
    ->middleware('auth')
    ->group(function () {
        // Admin dashboard
        Route::get('/home', [DashboardController::class, 'index'])->name('admin.home');
        // Admin logout
        Route::post('/logout', [AuthController::class, 'logout'])
            ->name('admin.logout');

        // Categories
        Route::get('/categories', [CategoryController::class, 'index'])
            ->name('admin.categories.index');

        // Show add category form
        Route::get('/categories/create', [CategoryController::class, 'create'])
            ->name('admin.categories.create');

        // Store new category
        Route::post('/categories', [CategoryController::class, 'store'])
            ->name('admin.categories.store');

        // Edit Category
        Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])
            ->name('admin.categories.edit');

        // Update Category
        Route::post('/categories/{id}/update', [CategoryController::class, 'update'])
            ->name('admin.categories.update');

        // Delete Category
        Route::post('/categories/{id}/delete', [CategoryController::class, 'destroy'])
            ->name('admin.categories.destroy');
    });
