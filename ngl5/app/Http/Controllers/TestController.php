<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\MovieSite;
use App\Models\User;
use App\Models\Article;
use App\Http\Requests;
use Response;


class TestController extends Controller
{


    public function getMovs(Movie $movies)
    {
        $movies = $movies->get()->pluck('MoviesWithArtist')->toArray();
        return $movies;
    }

    public function GmovieandSiteandArtist()
    {

        $msa = DB::table('movies')->join('movie_sites','movies.id','=','movie_sites.movie_id')->join('artists',function($join){
            $join->where(DB::raw('FIND_IN_SET(artists.id , movies.artist_id)'));
        })->get();
        var_dump($msa);

    }
    public function getArticles()
    {
        $articles = Article::all();
        return view('articles')->with('articles',$articles);
    }
    public function toGethor()
    {
        $this->getMovieSites();
    }
    public function getUserArticle($username)
    {

       $users = User::where('name',$username)->first();
       return view('profile')->with('users',$users);
    }
    public function MoviesAndSites()
    {
        /**
         *
         * working need to move home controller
         *
         */
        
        $movies = Movie::all();
        $msites = $movies->pluck('MoviesWithSites');
        echo $movies;
    }
    public function NowShow()
    {
        /**
         *
         * working need to move home controller
         *
         */
        
        $nshows = Movie::where('status','1')->take(7)->get();
        $movies = $nshows->pluck('MoviesWithSites');
        echo $nshows;
    }

}
