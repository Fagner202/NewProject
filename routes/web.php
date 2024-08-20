<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return view('welcome');
//     return view('teste');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/usuario', [App\Http\Controllers\UsuarioController::class, 'index']);