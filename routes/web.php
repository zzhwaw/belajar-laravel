<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello, World!';
});

route::get('/belajar', function ($name) {
    return "saya sedang belajar laravel!";
});
