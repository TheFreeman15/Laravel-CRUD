<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
    // fetching all data from db 
    // displaying them on page
      return view('todos.index')->with('todos',Todo::all());
        
    }

    public function show(Todo $todo)
    {

      return view('todos.show')->with('todo',$todo);

    }

    public function create()
    {
      return view('todos.create');

    }

    public function store()
    {
      $this->validate(request(),[
        'name' => 'required|min:6|max:12',
        'description' =>'required',
      ]);
      $data = request()->all();

      $todo = new Todo();
      $todo->name = $data['name'];
      $todo->description = $data['description'];
      $todo->completed =false;

      $todo->save();
      return redirect('/todos');
    }

    public function edit(Todo $todo)
    {

    return view('todos.edit')->with('todo',$todo);
    
    }

    public function update(Todo $todo)
    {
      $this->validate(request(),[
        'name' => 'required|min:6|max:12',
        'description' =>'required',
      ]);
     $data = request()->all();

    

     $todo->name = $data['name'];
     $todo->description = $data['description'];

     $todo->save();

     return redirect('/todos');


    }

    public function destroy(Todo $todo)
    {

      $todo->delete();
      return redirect('/todos');
    }
}
