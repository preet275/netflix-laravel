<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\MemberAuthController;
// Site home
Route::get('/', function () {
    return view('site.home');
})->name('home');

// Registration page
Route::get('/register', [RegisterController::class, 'show'])
    ->name('register');

// Handle registration form submission
Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

// Member login routes
Route::get('/login', [MemberAuthController::class, 'login'])
    ->name('site.login');

Route::post('/login', [MemberAuthController::class, 'authenticate'])
    ->name('site.login.authenticate');

// Public Netflix browse page
Route::middleware('member')->group(function () {

    // Member browse page
    Route::get('/browse', function () {
        return view('site.browse.home');
    })->name('browse');
    // Member logout
    Route::post('/logout', [MemberAuthController::class, 'logout'])
        ->name('member.logout');
});

// ADMIN LOGIN

// Show admin login page
Route::get('/admin', [AuthController::class, 'login'])
    ->name('admin.login');

// Handle admin login form submission
Route::post('/admin/login', [AuthController::class, 'authenticate'])
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

        // Movies list
        Route::get('/movies', [MovieController::class, 'index'])
            ->name('admin.movies.index');

        // Show add movie form
        Route::get('/movies/create', [MovieController::class, 'create'])
            ->name('admin.movies.create');

        // Store new movie
        Route::post('/movies', [MovieController::class, 'store'])
            ->name('admin.movies.store');

        // Show edit movie form
        Route::get('/movies/{id}/edit', [MovieController::class, 'edit'])
            ->name('admin.movies.edit');

        // Update movie
        Route::post('/movies/{id}/update', [MovieController::class, 'update'])
            ->name('admin.movies.update');

        // Delete movie
        Route::post('/movies/{id}/delete', [MovieController::class, 'destroy'])
            ->name('admin.movies.destroy');

        // Members
        Route::get('/members', [MemberController::class, 'index'])
            ->name('members.index');
        // Approve member
        Route::post('/members/{member}/approve', [MemberController::class, 'approve'])
            ->name('members.approve');

        // Reject member
        Route::post('/members/{member}/reject', [MemberController::class, 'reject'])
            ->name('members.reject');

        // Set member status back to pending
        Route::post('/members/{member}/pending', [MemberController::class, 'pending'])
            ->name('members.pending');
    });
