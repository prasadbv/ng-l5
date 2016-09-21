<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MovieSite;
use App\Models\Movie;
use App\Http\Requests;
use Response;
use DB;

class TestController extends Controller
{
	public function index()
	{
            /*$response = [];
						$mov_site = [];
            $movies = Movie::all()->take(5);
						$mov_sites = MovieSite::all();
						foreach($mov_sites as $kk=>$vv){
							$mov_site[$vv->movie_id][] = $vv;
						}
						$mov_site = json_decode(json_encode($mov_site),TRUE);
						$movies = json_decode(json_encode($movies),TRUE);
						//echo '<pre>'; print_r($mov_site[41]); echo '</pre>'; exit;
            foreach($movies as $key=>$movie){
              $response[$movie['id']] = $movie;
							@$response[$movie['id']]['sites'] = $mov_site[$movie['id']];
            }
						$jsondata = json_encode($response);
						//echo '<pre>'; print_r($response); echo '</pre>'; exit;
					 return view('test')->with('mov',$jsondata);
					//echo '<pre>'; print_r($response); echo '</pre>'; exit;
					//echo json_encode($mov);
					*/
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
}
