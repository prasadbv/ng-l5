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
    public function NowShowing()
    {
    	return $this->select('name', 'genre','rating')->where('status','1')->take(7)->get();

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
