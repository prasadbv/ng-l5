<?php
use App\Models\MovieSites;
Route::resource('/mov','HomeController@Sliderdata');
Route::resource('/info','HomeController@Getinfo');
Route::get('/',[
  'uses'=> 'HomeController@index',
  'as'=> 'home'
]);
Route::get('/movies','HomeController@movies');

Route::get('/gallery','HomeController@gallery');

Route::get('/gallery','HomeController@gallery');

Route::get('/sites/{mid}','MovieSiteController@index');

Route::get('/movietest',[
	'uses' => 'MoviesController@index',
	'as'   => 'movietest'
]);


Route::get('/moviesartist',[
	'uses' => 'HomeController@MovieArt',
	'as'   => 'moviesartist'
]);

Route::get('/todoapp',[
  'uses'=> 'TodoAppController@index'
]);

Route::get('/test',[
	'uses' => 'TestController@NowShow',
	'as'   => 'test'
]);


// Route::get('/test',[
// 	'uses' => 'TestController@getDetailsFromModel',
// 	'as'   => 'test'
// ]);
Route::get('/article',[
	'uses' => 'TestController@getArticles',
	'as'   => 'article'
]);
Route::get('/profile/{username}',[
	'uses' => 'TestController@getUserArticle',
	'as'   => 'profile'
]);
Route::get('/test1',[
	'uses' => 'TestController@MoviesAndSitesAndArtists',
	'as'   => 'test1'
]);