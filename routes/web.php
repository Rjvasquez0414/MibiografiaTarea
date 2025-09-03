<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/experiencia', function () {
    return view('experiencia');
});
