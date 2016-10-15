<?php
use App\Models\MovieSites;
Route::resource('/mov','HomeController@movdata');
Route::get('/',[
  'uses'=> 'HomeController@index',
  'as'=> 'home'
]);
Route::get('/movies','HomeController@movies');
Route::get('/gallery','HomeController@gallery');



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

// Route::group(['prefix' => 'api/v1'], function(){
// 	Route::resource('movies','MoviesController');
// 	Route::resource('moviesites','MovieSiteController');
// });

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

 Route::get('/sites/{mid}','MovieSiteController@index');

Route::get('/movietest',[
	'uses' => 'MoviesController@index',
	'as'   => 'movietest'
]);


/**
 *
 * movies block end here
 *
 */
Route::get('/moviesartist',[
	'uses' => 'HomeController@MovieArt',
	'as'   => 'moviesartist'
]);
Route::get('/todoapp',[
  'uses'=> 'TodoAppController@index'
]);
Route::get('/test',[
	'uses' => 'HomeController@GetInfo',
	'as'   => 'test'
]);
Route::get('/test1',[
	'uses' => 'TestController@MoviesAndSites',
	'as'   => 'test1'
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
