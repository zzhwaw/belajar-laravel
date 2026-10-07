<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar-git', function () {
    return 'Saya sedang belajar Git dengan Laravel!';
});

Route::get('/tentang-saya', function () {
    return 'Halo, nama saya Azizah.';
});

Route::get('/home-belajar', function () {
    return 'Selamat datang di halaman belajar Laravel!';
});

Route::get('/profile', function () {
    return 'Profile saya - dikembangkan menggunakan Laravel!';
});