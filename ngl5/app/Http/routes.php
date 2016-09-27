<?php
use App\Models\MovieSites;
Route::resource('/mov','HomeController@movdata');
Route::get('/',[
  'uses'=> 'HomeController@index',
  'as'=> 'home'
]);
// Route::get('/',[
//   'uses'=> 'HomeController@getDetailsFromModel',
//   'as'=> 'home'
// ]);
// Route::resource('api/todos','TodosController');


/**
 *
 * group testing start here
 *
 */

Route::group(['prefix' => 'api/v1'], function(){
	Route::resource('movies','MoviesController');
	Route::resource('moviesites','MovieSiteController');
});

/**
 *
 * group testing end here
 *
 */

/**
 *
 * movies block start here
 *
 */
Route::get('/movietest',[
	'uses' => 'MoviesController@index',
	'as'   => 'movietest'
]);
Route::get('/movies',function(){
	$movies = new MovieSites;
	$movies->Getmovies();
	return $movies->Getmovies;
});

/**
 *
 * movies block end here
 *
 */

Route::get('/todoapp',[
  'uses'=> 'TodoAppController@index'
]);
Route::get('/test',[
	'uses' => 'TestController@getDetailsFromModel',
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
