<?php

namespace App\Http\Controllers;
use App\Models\MovieSites;
use Illuminate\Support\Facades\Request;
use DB;
class MovieSiteController extends Controller
{
	public function index($mid)
	{
		$ss = DB::table('movie_sites')
									->where('movie_id',$mid)->get();
    return $ss; 									
	}
}
