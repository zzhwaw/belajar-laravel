<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar-git', function () {
    return 'Saya sedang belajar Git dengan Laravel!';
});