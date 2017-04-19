<?php

namespace App\Http\Controllers;

use App\Question;
use App\Quiz;
use App\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class QuestionController extends Controller
{
    public function view($id=0){
    	$quiz = Quiz::find($id)->questions();
        return view('questions.view')->with(array(
          'questions' => $quiz,
        ));
    }

    public function add() {
  		return view('forms.quiz.add')->with([
  			'quiz' => Quiz::find(0),
  		]);
  	}

  	public function edit(Request $request) {
  		$question = Question::find($request->id);
  		$question->title = $request->title;
  		$question->save();
		foreach($request->answer as $answer) {
			$answerdb = Answer::find(array_search($answer,$request->answer));
			$answerdb->name = $answer;
			$answerdb->save();
		}
		return Redirect::to('home')->with('message', __('question.message.edit.success'));
  	}

    public function form($id) {
      return view('questions.form')->with(array(
        'question' => Question::find($id),
      ));
    }

  	public function store(Request $request) {

  	}
}
