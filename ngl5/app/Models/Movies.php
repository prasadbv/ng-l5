<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    public function GetMovies()
    {
    	//protected $fillable = ['name'];
    		
    	//echo "hello";

    	return $this->belongsToMany('App\Models\Movies','movie_sites','movies_id')->get();
    	 
    }
}