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
        $validated = $request->validate([
            "content" => ["required", "max:255"],
            "completed" => ["boolean"]
          ]);

        ToDo::create([
            "content" => $validated["content"],
            "completed" => false
          ]);
          return redirect("/todos");

        
    }

    public function create()
    {
        return view('todos.create'); 
    }


    public function edit(Todo $todo)
    {
        return view("todos.edit", compact('todo'));
    }
    

    public function update(Request $request, ToDo $todo)
{
    
        $validated = $request->validate([
            "content" => ["required", "max:255"],
            "completed" => ["boolean"]
          ]);

        ToDo::create([
            "content" => $validated["content"],
            "completed" => false
          ]);
          return redirect("/todos");
          $todo->save(); 
          return redirect("/todos/{$todo->id}");
}


}