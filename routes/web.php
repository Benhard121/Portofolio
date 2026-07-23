<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectDetailController;

// Public Routes
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/projects/{id}', [ProjectDetailController::class, 'show'])->name('projects.show');
Route::get('/certificates', [PageController::class, 'certificates'])->name('certificates');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('projects', ProjectController::class);
        Route::resource('certificates', CertificateController::class);
        Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
        Route::get('messages/{id}', [MessageController::class, 'show'])->name('messages.show');
        Route::delete('messages/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');
    });
});

