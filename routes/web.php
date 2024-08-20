<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return view('welcome');
//     return view('teste');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/usuario', function () {
    return view('teste');
});