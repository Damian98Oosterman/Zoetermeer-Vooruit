<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function show($id){
        $data['id']=$id;
        $model=new Question();
        $answers=$model->show($data['id']);
        return view('forms.question.showanswers', ['answers'=>$answers]);

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
  		return redirect()->route('');
  	}
}
