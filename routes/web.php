<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;

// =====================
// AUTENTIFIKĀCIJA
// =====================

// Login maršruti
Route::get('/login', [SessionController::class, 'create'])
    ->name('login')
    ->middleware('guest');

Route::post('/login', [SessionController::class, 'store'])
    ->middleware('guest');

// Logout maršruts (piekļuve tikai autentificētiem)
Route::post('/logout', [SessionController::class, 'destroy'])
    ->name('logout')
    ->middleware('auth');

// Reģistrācijas maršruti
Route::get('/register', [RegisterController::class, 'create'])
    ->name('register')
    ->middleware('guest');

Route::post('/register', [RegisterController::class, 'store'])
    ->middleware('guest');

// Welcome skats tikai viesiem
Route::get('/', function () {
    return view('welcome');
});


// =====================
// PROJEKTA MARŠRUTI (piekļuve tikai pieteikušiem lietotājiem)
// =====================

Route::middleware('auth')->group(function () {
    // Todo uzdevumi
    Route::get('/todos', [ToDoController::class, 'index']);
    Route::get('/todos/create', [ToDoController::class, 'create']);
    Route::get('/todos/{todo}/edit', [ToDoController::class, 'edit'])->name('todos.edit');
    Route::get('/todos/{todo}', [ToDoController::class, 'show']);
    Route::post('/todos', [ToDoController::class, 'store']);
    Route::put('/todos/{todo}', [ToDoController::class, 'update']);
    Route::delete('/todos/{todo}', [ToDoController::class, 'destroy']);

    // Dienasgrāmatas ieraksti
    Route::get('/diaries', [DiaryController::class, 'index']);
    Route::get('/diaries/create', [DiaryController::class, 'create']);
    Route::get('/diaries/{diary}', [DiaryController::class, 'show']);
    Route::get('/diaries/{diary}/edit', [DiaryController::class, 'edit'])->name('diaries.edit');
    Route::put('/diaries/{diary}', [DiaryController::class, 'update'])->name('diaries.update');
    Route::delete('/diaries/{diary}', [DiaryController::class, 'destroy']);
});

// Citas lapas, kuras nav saistītas ar autentifikāciju
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
