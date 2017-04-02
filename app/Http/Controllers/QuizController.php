<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\QuizRequest;
use Illuminate\Support\Facades\Redirect;
use App\Quiz;  

class QuizController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }
  
	public function show() {
		$quiz=new Quiz();
		return view('show.quiz')->with([
			'quizes' => Quiz::all(),	
		]);
	}

	public function showQuestions( $id ) {
		$question=Quiz::find($id)->questions;
		return view('show.questions', ['questions'=>$question]);
	}

	public function add() {
		return view('forms.quiz.add')->with([
    		'quiz' => Quiz::find(0),
    	]);
	}

	public function store(Request $request) {
		$quiz = new Quiz;
		$quiz->title = $request->title;
		$quiz->description = $request->description;
    	$quiz->save();
    	return Redirect::to('home')->with('message', __('quiz.message.add.success'));
	}
}
