<?php

namespace App\Models;
use DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	protected $table = "movies";


    public function MoviesWithSites()
    {
    	return $this->belongsToMany('\App\Models\MovieSite','movie_movie_site');
    }
    public function NowShowing()
    {
			$movs = DB::table('movies')
            ->join('movie_sites', 'movies.id', '=', 'movie_sites.movie_id')
						->where('movies.status', '=', '1')
            ->select('movies.id','movies.name','movies.genre','movies.language','movies.rating', 'movie_sites.movie_id','movie_sites.site_name','movie_sites.site_logo','movie_sites.site_rating')
						->get();
			$mov = json_decode(json_encode($movs),TRUE);
			$mv = $ms = [];
			foreach( $mov as $key=>$val ){
				$ss = [];
				$ss['site_name'] = $val['site_name'];
				$ss['site_logo'] = $val['site_logo'];
				$ss['site_rating'] = $val['site_rating'];
				if(count($mv)<7 && count($ms)<7 ){
					$mv[$val['id']]['name'] = $val['name'];
					$mv[$val['id']]['genre'] = $val['genre'];
					$mv[$val['id']]['rating'] = $val['rating'];
					$mv[$val['id']]['language'] = $val['language'];
					$mv[$val['id']]['id'] = $val['id'];
					$ms[$val['id']][] = $ss;
				}else{break;}
			}
				$nowshow_data['movies']  = $mv;
				$nowshow_data['sites'] = $ms;
			return json_encode($nowshow_data);
    }

    public function BoxOfc()
    {
    	return $this->select('name','genre','rating')->where('status','2')->take(7)->get();
    }
    public function ComingWeek()
    {
    	return $this->select('name','genre','created_at')->where('status','3')->take(3)->get();
    }
    public function ComingSoon()
    {
    	return $this->select('name','genre','rating')->where('status','4')->take(3)->get();
    }

    public function getArtistIad()
    {

        return $this->select('artist_id');

    }
    public function MoviesWithArtist()
    {

    }
    public function MoviesWithSites()
    {
        return $this->belongsToMany('\App\Models\MovieSite','movie_movie_site','movie_id','site_id');
    }


    public function Gmovieandsite($status)
    {


        $msites = DB::table('movies')
           ->join('movie_sites', 'movies.id', '=', 'movie_sites.movie_id')
->where('movies.status', '=', $status)
           ->select('movies.id','movies.name','movies.genre','movies.rating','movies.language','movies.image','movies.certificate','movies.status','movie_sites.movie_id','movie_sites.site_name','movie_sites.site_logo','movie_sites.site_rating')
->get();
        return $msites;

    }
    public function scopeAttach($query)
    {
        return $query->whereRaw('FIND_IN_SET(artists.id,movies.artist_id)');
    }
    public function GmovieandSiteandArtist()
    {
       return $msa = $this->hasMany('\App\Models\Artist','id');
       // $msa = DB::table('movies')->join('movie_sites','movies.id','=','movie_sites.movie_id')->join('artists')->;
    }

}
