<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/experiencia', function () {
    return view('experiencia');
});

Route::get('/habilidades', function () {
    return view('habilidades');
});

Route::get('/estudios', function () {
    return view('estudios');
});
