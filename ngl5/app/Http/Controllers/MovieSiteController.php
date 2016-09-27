<?php

namespace App\Http\Controllers;
use App\Models\MovieSites;
use Illuminate\Support\Facades\Request;

class MovieSiteController extends Controller
{
	public function index($movie, $moviesites)
	{
		$movies = MovieSites::all();
		return $movies;
	}
}
