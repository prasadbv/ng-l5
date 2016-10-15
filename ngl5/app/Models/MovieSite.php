<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieSite extends Model
{
	protected $table = "movie_sites";

    public function Getmovies()
    {
    	//echo "string";
    	return $this->belongsTo('App\Models\Movie','movie_id');
    }
    public function Msites()
    {
    	return $this->belongsToMany('\App\Models\Movie','movie_movie_site','movie_id','site_id')->where('status','1');
    }
		public function Getsites($mid){
			return $mid;
			//return $this->select('movie_id','site_name','site_logo','site_rating')->where('movie_id',$mid)->get();
		}
}
