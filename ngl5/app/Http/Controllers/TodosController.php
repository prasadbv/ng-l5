<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Support\Facades\Request;

//use Illuminate\Http\Request;

use App\Http\Requests;
class TodosController extends Controller
{
    public function index(){
      $todos = Todo::all();
      return $todos;
    }
    public function store(){
      $todo = Todo::create(Request::all());
      return $todo;
    }
    public function update($id){
      $todo = Todo::find($id);
      $todo->done=Request::input(done);
      $todo->save();
      return $todo;
    }
    public function destroy($id){
      Todo::destroy($id);
    }
}
