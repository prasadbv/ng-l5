<?php
namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Artist;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\MovieSite;
use App\Http\Requests;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){

      $movies = new Movie;
      return view('app')->with('movies',$movies);

    }
    public function Sliderdata(){
      $movies = DB::table('movies')
                    ->where('status',1)
                    ->orderBy('id','DESC')->take(8)->get();
      $mov_sites = MovieSite::all();
      $movies = json_decode(json_encode($movies),TRUE);
      $movie_sites = json_decode($mov_sites,true);
      $site_data = [];
      foreach( $movie_sites as $kk=>$vals ){
          $site_data[$vals['movie_id']][] = $vals;
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
      $movies_data2['data'] = $movies_data;
      $movies_data2['images'] = $movie_images;
      return $movies_data2;
    }
    public function movies(){
    return view('app');
    }
    public function gallery(){
      return view('app');
    }
    public function GetInfo(Movie $moviesSites,Request $request)
    {
       $data = [] ;
       $data['slider'] = $this->Sliderdata($moviesSites);
       $data['NowShowingMovies'] = $this->NowShow($moviesSites);
       $data['TopBoxOffice'] = $this->TopBox($moviesSites);
       $data['CommingThisWeek'] = $this->CommingThisWeek($moviesSites);
       $data['CommingSoon'] = $this->CommingSoon($moviesSites);
       //$data['ArtistInfo'] = $this->ArtistInfo();
       $data['Posts'] = $this->Posts();
       $data['allmovies'] = $this->MoviesAndSitesAndArtists();
       return $data;
    }
    public function NowShow()
    {
        $nshows = Movie::where('status','1')->take(7)->get();
        $movies = $nshows->pluck('MoviesWithSites');
        return $nshows;
    }
    public function TopBox()
    {
        $nshows = Movie::where('status','2')->take(7)->get();
        $movies = $nshows->pluck('MoviesWithSites');
        return $nshows;
    }
    public function MoviesAndSitesAndArtists()
    {
     $movies = Movie::all()->take(8);
     $msites = $movies->pluck('MoviesWithSites');
     $art = $movies->pluck('MoviesWithArtists');
     return $movies;
   }
    public function allmovies(Movie $moviesSites){
       $movies =  json_decode(json_encode($moviesSites->movieslist()),TRUE);
       $mov_artists = [];
       foreach($movies as $k=>$v){
         $mov_artists[$v['id']] = $v;
         $arids = explode(',',$v['artist_id']);
         $artists =  json_decode(json_encode($moviesSites->artistlist($arids)),TRUE);
         $mov_artists[$v['id']]['artists'] = $artists;
       }
       return $mov_artists;
	  }


    public function ArtistInfo()
    {
        $artists = Artist::select('id','artist_name','artist_gal_pic','artist_description')->take(9)->get();
        return $artists;
    }
    public function Posts()
    {
        $posts = Post::orderBy('id','desc')->take(6)->get();
        return $posts;
    }
    public function CommingThisWeek(Movie $moviesSites)
    {
      $status = 3;
      $nowms =  $moviesSites->Gmovieandsite($status);
      $movies = [];
        foreach ($nowms as $value) {
            $sites = [];
            $sites['site_name'] = $value->site_name;
            $sites['site_logo'] = $value->site_logo;
            $sites['site_rating'] = $value->site_rating;
            $movies[$value->movie_id]['movie_name'] = $value->name;
            $movies[$value->movie_id]['language'] = $value->language;
            $movies[$value->movie_id]['genre'] = $value->genre;
            $movies[$value->movie_id]['image'] = $value->image;
            $movies[$value->movie_id]['certificate'] =$value->certificate;
            $movies[$value->movie_id]['status'] =$value->status;
            $movies[$value->movie_id]['sites'][] = $sites;

        };
        return $movies;
    }
    public function CommingSoon(Movie $moviesSites)
    {
      $status = 4;
      $nowms =  $moviesSites->Gmovieandsite($status);
      $movies = [];
        foreach ($nowms as $value) {
            $sites = [];
            $sites['site_name'] = $value->site_name;
            $sites['site_logo'] = $value->site_logo;
            $sites['site_rating'] = $value->site_rating;
            $movies[$value->movie_id]['movie_name'] = $value->name;
            $movies[$value->movie_id]['language'] = $value->language;
            $movies[$value->movie_id]['genre'] = $value->genre;
            $movies[$value->movie_id]['image'] = $value->image;
            $movies[$value->movie_id]['certificate'] =$value->certificate;
            $movies[$value->movie_id]['status'] =$value->status;
            $movies[$value->movie_id]['sites'][] = $sites;

        };
        return $movies;
    }


}
