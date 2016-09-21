<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Movies;
use App\Http\Requests;
use Response;

class TestController extends Controller
{
	public function index()
	{
		try{
            $statusCode = 200;
            $response = [
              'movies'  => []
            ];

            //$movies = new Movie();
            ///$movies = DB::table('movies')->get();
            $movies = Movie::get();
            foreach($movies as $movie){

                $response['movies'][] = [
                'id'        => $movie->id,
                'name'      => $movie->name,
                'language'  => $movie->language,
                'genre'     => $movie->genre,
                'movie_poster' => $movie->image,
                'certificate'  => $movie->certificate,
                $site_movie[]  = [
                    'id'    => $movie->movie_id,
                    'name'  => $movie->site_name,
                    'site_logo' => $movie->site_logo,
                    'site_rating' => $movie->site_rating
                ],
            ];
            }

        }catch (Exception $e){
            $statusCode = 400;
        }finally{
           var_dump($response);
            
        }
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
    public function getDetailsFromModel()
    {
        $movies = new Movies;
        $movies->GetMovies();
        return view('home')->with('movies',$movies);
    }
}
