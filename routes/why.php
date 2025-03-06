<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ToDoController;

Route::get('/why', function () {
    return view('why');  
});
