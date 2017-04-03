<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// TODO: Fix routing using a controller #25
Route::get('/contact', function(){
  return view('contact');
});

Route::get('/welkom', function () {
    return view('welcome');
});

Route::get('/', function() {
  return view('welcome');
});

Route::group(['prefix'=>'quiz'], function (){
    Route::get('/', 'QuizController@view');
    Route::get('/{id}', 'QuestionController@view')->where('id', '[0-9]+');
    Route::get('create', 'QuizController@add');
    Route::post('create', 'QuizController@store');
});

Route::group(['prefix'=>'question'], function(){
  Route::get('/', 'QuestionController@view');
	Route::get('{id}', 'QuestionController@form')->where('id', '[0-9]+');
    Route::post('/{id}', 'QuestionController@edit')->where('id', '[0-9]+');
});

Route::get('/home', 'HomeController@index');

Auth::routes();
