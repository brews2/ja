<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;


Route::get('/painted', function () {
    return view('painted');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/diary', function () {
    return view('diary');
});

Route::get('/todos', [ToDoController::class, 'index']);

Route::get('/diaries', [DiaryController::class, 'index']);

Route::get('/todos/{todo}', [ToDoController::class, 'show']);


