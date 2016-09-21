<?php

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/mov','HomeController@movdata');
Route::get('/',[
  'uses'=> 'HomeController@index',
  'as'=> 'home'
]);
Route::resource('api/todos','TodosController');
Route::get('/todoapp',[
  'uses'=> 'TodoAppController@index'
]);
Route::get('/test',[
	'uses' => 'TestController@index',
	'as'   => 'test'
]);
//Route::resource('api/v1','TestController');
