<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return view('home');
});

Route::get('/profilcintya', function () {
    return view('profilcintya');
});

Route::get('/matakuliah', function () {
    return view('matakuliah');
});