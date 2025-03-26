<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResourceController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return Inertia::render('Admin');
})->name('admin');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/about', function () {
    return Inertia::render('About'); // Ensure this matches your Vue component
})->name('about');

Route::get('/assessment', function () {
    return Inertia::render('Assessment'); // Ensure this matches your Vue component
})->name('assessment');
Route::get('/professionals', function () {
    return Inertia::render('Professionals');
});

Route::get('/resources', function () {
    return Inertia::render('Resources');
});

Route::get('/admin/resources', [ResourceController::class, 'index'])->name('admin.resources.index');
Route::post('/admin/resources', [ResourceController::class, 'store'])->name('admin.resources.store');