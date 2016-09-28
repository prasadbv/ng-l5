<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MovieSite;
use App\Models\Movie;
use App\Http\Requests;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){
      //printf("Right now is %s", Carbon::now()->addDay());
      //echo date('Y-m-d h:i:s');

      return view('home');
    }
    public function movdata(){
      $movies = DB::table('movies')
                    ->where('status',1)
                    ->orderBy('id','DESC')->take(8)->get();
      //$movies = Movie::all()->where('status',1)->take(8);
      $mov_sites = MovieSite::all();

    $movies = json_decode(json_encode($movies),TRUE);
      //echo '<pre>'; print_r($movies); echo '</pre>';
      //$movies = json_decode($movies,TRUE);
      $movie_sites = json_decode($mov_sites,true);
      $site_data = [];
      foreach( $movie_sites as $kk=>$vals ){
          $site_data[$vals['movies_id']][] = $vals;
      }
      $movies_data2 = [];
      $movies_data = [];$movie_images = [];
      foreach( $movies as $key=>$val ){
        $movie_images[$key]['id'] = $val['id'];
        $movie_images[$key]['image'] = $val['image'];
        $lang = explode(',',$val['language']);
        $gen = explode(',',$val['genre']);
        //$movies_data[$val['id']]['id'] = $val['id'];
        $movies_data[$val['id']]['name'] = $val['name'];
        $movies_data[$val['id']]['language'] = $lang;
        $movies_data[$val['id']]['genre'] = $gen;
        @$movies_data[$val['id']]['sites'] = $site_data[$val['id']];
      }
      //echo '<pre>'; print_r($movies_data); echo '</pre>';
      $movies_data2['data'] = $movies_data;
      $movies_data2['images'] = $movie_images;

      return json_encode($movies_data2);
    }
}
