<?php

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[
  'uses'=> 'HomeController@index',
  'as'=> 'home'
]);
