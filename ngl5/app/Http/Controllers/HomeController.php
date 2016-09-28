<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Models\MovieSite;
use App\Http\Requests;

class HomeController extends Controller
{
    public function index(){
    
      //echo '<pre>'; print_r($movies); echo '</pre>';
    	//$nowshows = DB::table('movies')->where('status','1')->get();
    	$movies = new Movie;
      	return view('home')->with('movies',$movies);
    }

    
    public function movdata(){
     $movies = Movie::all()->take(8);
     $mov_sites = MovieSite::all();

     $movies = json_decode($movies,true);
     $movie_sites = json_decode($mov_sites,true);
     $site_data = [];
     foreach( $movie_sites as $kk=>$vals ){
         $site_data[$vals['movie_id']][] = $vals;
     }
     $movies_data2 = [];
     $movies_data = [];
     $movie_images = [];
     foreach( $movies as $key=>$val ){
       $movie_images[$key]['id'] = $val['id'];
       $movie_images[$key]['image'] = $val['image'];
       $lang = explode(',',$val['language']);
       $gen = explode(',',$val['genre']);
       $movies_data[$val['id']]['name'] = $val['name'];
       $movies_data[$val['id']]['language'] = $lang;
       $movies_data[$val['id']]['genre'] = $gen;
       @$movies_data[$val['id']]['sites'] = $site_data[$val['id']];
     }
     //echo '<pre>'; print_r($movie_images); echo '</pre>';
     $movies_data2['data'] = $movies_data;
     $movies_data2['images'] = $movie_images;
     //echo json_encode($movie_images);

     return json_encode($movies_data2);
   }
/*   public function movdata(){
   	$movies = Movie::all()->take(8);
    $mov_sites = MovieSite::all();
    return $movies;
   }*/
}
