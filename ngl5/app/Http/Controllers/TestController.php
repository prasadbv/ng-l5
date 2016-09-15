<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Http\Requests;
use Response;

class TestController extends Controller
{
    public function index(){
    	//$GetMovies = new Movie;
    	//$GetMovies->GetMovies();
    	$movies = Movie::all();
    	//var_dump($movies);
    	$movies = Response::json($movies);
    	echo "<pre>",print_r(json_decode(json_encode($movies),TRUE)),"</pre>";
    	dd();
    	return response($movies);
    	 
    	
    }
}
