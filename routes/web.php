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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix'=>'enquete'], function (){
    Route::get('/show', 'QuizController@show');
    Route::get('{id}/vragen', ['uses'=>'QuizController@showQuestions']);
});

Route::group(['prefix'=>'vraag'], function(){
    Route::get('{id}/antwoorden', ['uses'=>'QuestionController@show']);
});
Auth::routes();

Route::get('/home', 'HomeController@index');
