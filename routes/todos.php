<?php


use App\Http\Controllers\ToDoController;

Route::get('/todos', [ToDoController::class, 'index']);

