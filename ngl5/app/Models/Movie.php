<?php

namespace App\Models;
use DB;
use Carbon\Carbon;
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
    public function NowShowing1()
    {
			$movs = DB::table('movies')
            ->join('movie_sites', 'movies.id', '=', 'movie_sites.movie_id')
						->where('movies.status', '=', '1')
            ->select('movies.id','movies.name','movies.genre','movies.rating', 'movie_sites.movie_id','movie_sites.site_name','movie_sites.site_logo','movie_sites.site_rating')						
						->get();
			$mov = json_decode(json_encode($movs),TRUE);
			$mv = [];
			foreach( $mov as $key=>$val ){
				$ss = [];
				$ss['site_name'] = $val['site_name'];
				$ss['site_logo'] = $val['site_logo'];
				$ss['site_rating'] = $val['site_rating'];
				$mv[$val['id']]['name'] = $val['name'];
				$mv[$val['id']]['genre'] = $val['genre'];
				$mv[$val['id']]['rating'] = $val['rating'];
				$mv[$val['id']]['id'] = $val['id'];
				$ms[$val['id']][] = $ss;
			}
				$nowshow_data['movies']  = $mv;
				$nowshow_data['sites'] = $ms;
					//echo '<pre>'; print_r($nowshow_data); echo '</pre>';
			return json_encode($nowshow_data);

    }
		public function NowShowing(){
			return $this->select('id','name', 'genre','rating')->where('status','1')->take(7)->get();
		}
    public function BoxOfc()
    {
    	return $this->select('name','genre','rating')->where('status','2')->take(7)->get();
    }
    public function ComingWeek()
    {
    	return $this->select('name','genre','created_at')->where('status','3')->take(3)->get();
    	//return $this->select('name','genre','created_at')->where('status','3')->take(3)->groupBy(Carbon::parse('created_at')->day())->get();
    	//return $this->select('name','genre','created_at')->where('status','3')->take(3)->groupBy(function($date) {
        //return \Carbon\Carbon::parse($date->created_at)->format('d-M-y');
    //})->orderBy('created_at')->get();
    }
    public function ComingSoon()
    {
    	return $this->select('name','genre','rating')->where('status','4')->take(3)->get();
    }

}
