<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\QuizRequest;
use Illuminate\Support\Facades\Redirect;
use App\Quiz;

class QuizController extends Controller
{

	public function add() {
		return view('quiz.add')->with([
    		'quiz' => Quiz::find(0),
    	]);
	}

	public function store(QuizRequest $request) {
		$quiz = new Quiz;
		$quiz->title = $request->title;
		$quiz->description = $request->description;
    	$quiz->save();
    	return Redirect::to('home')->with('message', __('quiz.message.add.success'));
	}
    public function view(){
       return view('quiz.view')->with(array(
       		'quizzes' => Quiz::all(),
       ));
   }
}
