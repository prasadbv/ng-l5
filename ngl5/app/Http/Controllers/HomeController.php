<?php

namespace App\Http\Controllers;

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
    public function movdata(){
      $movies = Movie::all()->take(8);
      $mov_sites = MovieSite::all();
      $movies = json_encode($movies);
      //echo '<pre>'; print_r($movies); echo '</pre>';
      return $movies;
    }
}
