<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	protected $table = "movies";
    // public function GetMovies()
    // {
    // 	return $this->belongsTo('App\Models\MovieSites','movie_id');
    // }
    public function MoviesWithSites()
    {
    	return $this->belongsToMany('\App\Models\MovieSite','movie_movie_site');
    }
}
