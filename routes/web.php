<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ToDoController;

Route::get('/painted', function () {
    return view('painted');
});

Route::get('/products', function () {
    return view('products');
});


