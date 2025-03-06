<?php

use Illuminate\Support\Facades\Route;

Route::get('/painted', function () {
    return view('painted');
});

Route::get('/products', function () {
    return view('products');
});


