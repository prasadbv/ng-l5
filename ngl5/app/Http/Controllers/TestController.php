<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
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

            $movies = Movie::all()->take(9);
            

            foreach($movies as $movie){

                $response['movies'][] = [
                    'id' => $movie->id,
                    'user_id' => $movie->name
                ];
            }

        }catch (Exception $e){
            $statusCode = 400;
        }finally{
           var_dump($response);
            
        }
	}
}
