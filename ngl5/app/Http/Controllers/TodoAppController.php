<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TodoAppController extends Controller
{
    public function index(){
      return view('TodoApp/index');
    }
}
