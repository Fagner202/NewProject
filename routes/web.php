<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AuthenticatedMiddleware;
use App\Http\Middleware\CheckIfsAdmin;
use Illuminate\Support\Facades\Auth;
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

Route::middleware(([AuthenticatedMiddleware::class]))->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/eventos', [EventoController::class, 'index'])->name('eventos.index');
    Route::get('/eventos/create', [EventoController::class, 'create'])->name('eventos.create');
    Route::post('/eventos/store', [EventoController::class, 'store'])->name('eventos.store');

    Route::post('/ajax/request-handler', [AjaxController::class, 'handle'])->name('ajax.handler');
    // Route::post('/ajax/request', [AjaxController::class, 'deleteEvento'])->name('ajax.request');
    // Route::post('/ajax/request', function () {
    //     // dd(request()->all());
    //     return response()->json(request()->all());
    // })->name('ajax.request');
});


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/lougout', function () {
    Auth::logout();
    return redirect('/login');
});

require __DIR__.'/auth.php';
