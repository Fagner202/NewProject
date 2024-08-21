<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return view('welcome');
//     return view('teste');
// });

// Route::get('/', function () {return view('home'); });

Route::get('/usuario', [App\Http\Controllers\UsuarioController::class, 'index'])->name('users.index');



Route::get('/', function () {return view('home'); })->name('home');
Route::get('/features', function () {return view('features'); })->name('features');
Route::get('/pricing', function () {return view('pricing'); })->name('pricing');
// Route::get('/users', function () {return view('users.index'); })->name('users.index');
