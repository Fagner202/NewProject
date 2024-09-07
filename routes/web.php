<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\CheckIfsAdmin;
use Illuminate\Support\Facades\Route;

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy')->middleware(CheckIfsAdmin::class);    
});

// Route::get('\events', [\App\Http\Controllers\EventController::class, 'index'])->name('events.index');
// Route::get('/dashboard', [EventoController::class, 'index'])->name('events.index');
route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route::get('/', function () {
    // return view('teste');
// });

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/dashboard', function () {
    // return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
