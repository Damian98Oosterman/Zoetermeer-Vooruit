<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;
use App\Http\Requests\QuizRequest;
use Illuminate\Support\Facades\Redirect;

class QuizController extends Controller
{
	public function show() {
		$quiz=new Quiz();
		return view('forms.quiz.show')->with([
			'quizes' => $quiz->getQuiz(),	
		]);
	}

	public function showQuestions( $id ) {
		$quiz= Quiz::find($id);
		$question=$quiz->questions;
		return view('forms.quiz.showquestions', ['questions'=>$question]);
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
    	return Redirect::to('home')->with('message', __('quiz.message.add.success', ['']));
	}
}
