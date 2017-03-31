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

Route::group(['prefix'=>'quiz'], function (){
    Route::get('/', 'QuizController@show');
    Route::get('{id}/questions', 'QuizController@showQuestions');
    Route::get('create', 'QuizController@add');
    Route::post('create', 'QuizController@store');
});

Route::group(['prefix'=>'question'], function(){
    Route::get('{id}/answers', 'QuestionController@answers');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
