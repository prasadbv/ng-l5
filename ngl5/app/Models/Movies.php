<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    public static function GetMovies()
    {

    	//return $this->hasMany('App\MovieSite');

    	//protected $fillable = ['name'];

    	return $this->belongsToMany('App\Models\Movies','movie_sites','movies_id')->get();

    }
}
