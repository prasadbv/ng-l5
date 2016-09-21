<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Movies;
use App\Models\MovieSite;
use App\Http\Requests;
use Response;
use DB;

class TestController extends Controller
{
	public function index()
	{
					$mov = DB::table('movies')
										->select('movies.id','movies.name','movies.language','movies.genre','movies.image','movies.certificate','movie_sites.id as msid','movie_sites.movies_id','movie_sites.name as msname','movie_sites.logo','movie_sites.rating')
        						->join('movie_sites', function ($join) {
            					$join->on('movies.id', '=', 'movie_sites.movies_id');})
										->get();
					$movies = json_decode(json_encode($mov),TRUE);
						foreach( $movies as $kk=>$row ){
							$tt = [];
							$data[$row['id']]['movie_name'] = $row['name'];
							$data[$row['id']]['movie_language'] = $row['language'];
							$data[$row['id']]['movie_genre'] = $row['genre'];
							$data[$row['id']]['movie_image'] = $row['image'];
							$data[$row['id']]['movie_certificate'] = $row['certificate'];
							$tt['site_name'] = $row['msname'];
							$tt['site_logo'] = $row['logo'];
							$tt['site_rating'] = $row['rating'];
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
    public function getDetailsFromModel()
    {
        $movies = new Movies;
        $movies->GetMovies();
        return view('home')->with('movies',$movies);
    }
}
