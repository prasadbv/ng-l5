<?php

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[
  'uses'=> 'HomeController@index',
  'as'=> 'home'
]);
Route::resource('api/todos','TodosController');
Route::get('/todoapp',[
  'uses'=> 'TodoAppController@index'
]);
