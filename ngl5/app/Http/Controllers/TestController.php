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
	public function index()
	{
					$mov = DB::table('movies')
        						->join('movie_sites', function ($join) {
            					$join->on('movies.id', '=', 'movie_sites.movies_id');})
										->get();
					$movies = json_decode(json_encode($mov),TRUE);
						foreach( $movies as $kk=>$row ){
							$tt = [];
							$lang = explode(',',$row['language']);
			        $gen = explode(',',$row['genre']);
							$data[$row['id']]['movie_name'] = $row['name'];
							$data[$row['id']]['movie_language'] = $lang;
							$data[$row['id']]['movie_genre'] = $gen;
							$data[$row['id']]['movie_image'] = $row['image'];
							$data[$row['id']]['movie_certificate'] = $row['certificate'];
							$tt['site_name'] = $row['site_name'];
							$tt['site_logo'] = $row['site_logo'];
							$tt['site_rating'] = $row['site_rating'];
							$tt['movie_id'] = $row['movies_id'];
							$data[$row['id']]['sites'][] = $tt;

						}
				echo '<pre>'; print_r($data); echo '</pre>';

	}
    public function movies()
    {
        //'SELECT * FROM `movies` INNER JOIN `movie_sites` ON movies.id=movie_sites.movie_id'
        $movies = DB::table('movies')
                    ->rightJoin('movie_sites','movies.id', '=', 'movie_sites.movie_id')->get();
        //$movies = Movie::where(DB::raw('movie_sites.movie_id'));

       // dd();

        $moviedata = [];
        $site_movie = [];
        foreach ($movies as $movie) {
            $site_movie = [];
            $moviedata[$movie->id]['name'] = $movie->name;
            $moviedata[$movie->id]['language'] = $movie->language;
            $moviedata[$movie->id]['genre'] = $movie->genre;
            $moviedata[$movie->id]['movie_poster'] = $movie->image;
            $moviedata[$movie->id]['certificate'] = $movie->certificate;
            $site_movie['name'] = $movie->site_name;
            $site_movie['site_logo'] = $movie->site_logo;
            $site_movie['site_rating'] = $movie->site_rating;
            $moviedata[$movie->id]['sites'][] = $site_movie;


        }
        echo '<pre>';print_r($moviedata); echo '</pre>';
       // return view('test',['moviedata'=>$moviedata]);
    }
    public function getDetailsFromModel(MovieSite $moviesite)
    {
        $movies = $moviesite->Getmovies()->orderBy('id')->get();
        //$movies = MovieSites::all();
        //$movies = $movies->Getmovies;
        var_dump($movies);
        dd($movies);
       // ;
       // return view('test')->with('movies',$movies);
    }
    public function getArticles()
    {
        $articles = Article::all();
        return view('articles')->with('articles',$articles);
    }
    public function getUserArticle($username)
    {

       $users = User::where('name',$username)->first();
       return view('profile')->with('users',$users);
    }
}
