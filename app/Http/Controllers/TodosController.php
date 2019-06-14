<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
   public function index()
   {
       return view('Todos.todos')->with('todo',Todo::all());
   }
   public function show(Todo $todo)
   {
        return view('Todos.show')->with('todo',$todo);
   }
   public function newtodo(){
       return view('Todos.newtodo');
   }
   public function store()
   {
       $this->validate(request(),[
           'name'=>'required|min:3|max:20',
           'description'=>'required'
       ]);
        $data =request()->all();
        $todo = new Todo;
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();
        session()->flash('success','Todo is successfully created');
        return redirect('/todos');
   }
   public function edit(Todo $todo)
   {
        return view('Todos.edit')->with('todo',$todo);
   }
   public function update(){
       $this->validate(request(),[
           'username'=>'required|min:3|max:20',
           'descriptions'=>'required'
       ]);
       $data =request()->all();
       $todo = Todo::find($data['todoid']);
       $todo->name= $data['username'];
       $todo->description = $data['descriptions'];
       $todo->save();
       session()->flash('success','Todo is successfully updated');
       return redirect('/todos');
   }
   public function delete(Todo $todo)
   {
       $todo->delete();
       session()->flash('success','Todo is successfully deleted');
       return redirect('/todos');
   }
   public function complete(Todo $todo)
   {
       $todo->completed = true;
       $todo->save();
       session()->flash('success','Todo is successfully completed');
       return redirect('/todos');
   }
}
