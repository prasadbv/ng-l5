<?php

namespace App\Http\Controllers;
use App\Models\Movies;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index(){
      return view('home');
    }
    public function getDetailsFromModel()
    {
        $movies = new Movies;
        $movies->GetMovies;
        return view('home')->with('movies',$movies);
    }
}
