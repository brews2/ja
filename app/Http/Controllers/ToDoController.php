<?php

namespace App\Http\Controllers;

use App\Models\ToDo; 
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index()
    {
        $todos = ToDo::all();
        return view("todos.index", compact("todos"));
    }

    public function show(ToDo $todo) {
        return view("todos.show", compact("todo"));
    }

    public function store(Request $request)
    {
        ToDo::create([
            "content" => $request->content,
            "completed" => false
          ]);
        dd("Metode store izsaukta");

        
    }

    public function create()
    {
        return view('todos.create'); 
    }
}
