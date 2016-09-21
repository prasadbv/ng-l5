<?php

namespace App\Http\Controllers;
use App\Models\Movies;
use Illuminate\Http\Request;
use App\Models\MovieSite;
use App\Models\Movie;
use App\Http\Requests;

class HomeController extends Controller
{
    public function index(){
    
      //echo '<pre>'; print_r($movies); echo '</pre>';
      return view('home');
    }

    public function getDetailsFromModel()
    {
        $movies = new Movies;
        $movies->GetMovies;
        return view('home')->with('movies',$movies);
    }
    public function movdata(){
      $movies = Movie::all()->take(8);
      $mov_sites = MovieSite::all();
      $movies = json_encode($movies);
      //echo '<pre>'; print_r($movies); echo '</pre>';
      return $movies;

    }
}
