<?php

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[
  'uses'=> 'HomeController@index',
  'as'=> 'home'
]);
Route::get('/',[
  'uses'=> 'HomeController@getDetailsFromModel',
  'as'=> 'home'
]);
Route::resource('api/todos','TodosController');
Route::get('/todoapp',[
  'uses'=> 'TodoAppController@index'
]);
Route::get('/test',[
	'uses' => 'TestController@getDetailsFromModel',
	'as'   => 'test'
]);
//Route::resource('api/v1','TestController');