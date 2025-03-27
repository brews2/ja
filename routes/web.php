<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;


Route::get('/painted', function () {
    return view('painted');
});

Route::get('/james', function () {
    return view('james');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/diary', function () {
    return view('diaries');
});

Route::get('/todos', [ToDoController::class, 'index']);

Route::get('/diaries', [DiaryController::class, 'index']);

Route::get('/todos/create', [ToDoController::class, 'create']);

Route::get('/todos/{create}', [ToDoController::class, 'show']);
Route::get('/diaries/{diary}', [DiaryController::class, 'show']);



Route::post('/todos', [ToDoController::class, 'store']);



