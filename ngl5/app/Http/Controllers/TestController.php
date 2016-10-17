<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\MovieSite;
use App\Models\Artist;
use App\Models\User;
use App\Models\Article;
use App\Models\Post;
use App\Http\Requests;
use Response;


class TestController extends Controller
{


    public function getMovs(Movie $movies)
    {
        $movies = $movies->get()->pluck('MoviesWithArtist')->toArray();
        return $movies;
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

    public function ArtistInfo()
    {
        /**
         *
         * working need to move home controller
         *
         */
        
        $artists = Artist::select('id','artist_name','artist_pic','artist_description')->take(10)->get();
        echo $artists;
    }
    public function Posts()
    {
        /**
         *
         * working need to movie home controller
         *
         */
        
        $posts = Post::all()->take(6);
        echo $posts;
    }
    public function MoviesAndArtists()
    {
        $a = Movie::all();
        $b = $a->pluck('MoviesWithArtists');
        echo $b;
    }
   
   
}
