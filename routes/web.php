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
Route::get('/diaries/create', [DiaryController::class, 'create']);

// forma
Route::get('/todos/{todo}/edit', [ToDoController::class, 'edit'])->name('todos.edit');

// jaunie
Route::get('/todos/{todo}', [ToDoController::class, 'show']);
Route::get('/diaries/{diary}', [DiaryController::class, 'show']);

Route::post('/todos', [ToDoController::class, 'store']);
Route::post('/diaries', [DiaryController::class, 'store']);

Route::put('/todos/{todo}', [ToDoController::class, 'update']);

Route::get('/diaries/{diary}/edit', [DiaryController::class, 'edit'])->name('diaries.edit');
Route::put('/diaries/{diary}', [DiaryController::class, 'update'])->name('diaries.update');

Route::get('/diaries/{diary}/edit', [DiaryController::class, 'edit']);
Route::put('/diaries/{diary}', [DiaryController::class, 'update']);

Route::delete('/todos/{todo}', [ToDoController::class, 'destroy']);
Route::delete('/diaries/{diary}', [DiaryController::class, 'destroy']);
