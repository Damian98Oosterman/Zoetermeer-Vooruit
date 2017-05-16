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

Route::get("contact", 		"RoutingController@contact"			);
Route::get("welcome", 		"RoutingController@landing"			);
Route::get("/", 			"RoutingController@landing"			);
Route::get('/home/edit', 	'RoutingController@editHome'		)->middleware('admin');
Route::get('/about/edit', 	'RoutingController@editAbout'		)->middleware('admin');
Route::get("about", 		"RoutingController@about"			);
Route::post('/about/edit', 	'RoutingController@saveHTMLAbout'	)->middleware('admin');
Route::post('/home/edit', 	'RoutingController@saveHTML'		)->middleware('admin');

Route::group(['prefix'=>'quiz'], function() {
    Route::get('/', 				'QuizController@view'			);
    Route::get('/{id}', 			'QuestionController@view'		)->where('id', '[0-9]+');
    Route::get('create', 			'QuizController@add'			);
    Route::get('{id}/make', 		'QuizController@make'			)->where('id', '[0-9]+');
    Route::get('{id}/statistics', 	'RoutingController@statistics'	)->where('id', '[0-9]+');
    Route::post('create', 			'QuizController@store'			);
    Route::post('{id}/make', 		'ReplyController@make'			)->where('id', '[0-9]+');
    Route::post('/delete', 			'QuizController@delete'			);
    Route::post('{id}/statistics', 	'QuizController@statistics'		)->where('id', '[0-9]+');
});

Route::group(['prefix'=>'question'], function(){
	Route::get('/', 	'QuestionController@view');
	Route::get('{id}', 	'QuestionController@form')->where('id', '[0-9]+');
    Route::post('/{id}','QuestionController@edit')->where('id', '[0-9]+');
});

Route::group(['prefix' => 'users'], function() {
	Route::get('/', 			'UserController@list'	)->middleware('admin');
	Route::get('/{id}/admin', 	'UserController@promote')->middleware('admin');
	Route::get('/{id}/demote', 	'UserController@demote'	)->middleware('admin');
	Route::get('/{id}/allow', 	'UserController@allow'	)->middleware('admin');
	Route::get('/{id}/ban', 	'UserController@ban'	)->middleware('admin');
});

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/{page}', 'CMSController@index');