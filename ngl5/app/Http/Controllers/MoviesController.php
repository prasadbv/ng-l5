<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Support\Facades\Request;

class MoviesController extends Controller
{
	public function index()
	{
		$movies = Movie::all()->lists('id');
		return $movies;
	}
	
}
