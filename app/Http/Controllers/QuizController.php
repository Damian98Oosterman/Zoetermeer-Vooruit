<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\QuizRequest;
use Illuminate\Support\Facades\DB;
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

        $questions = array();
        $i=0;

        foreach ($request->questions as $question){
            $quiz_id = $quiz->id;

            $questions[$i++] = array('title' => $question, 'quiz_id' => $quiz_id);
            if ($question == null){
                array_pop($questions);
            }
        }
        DB::table('question')->insert($questions);

    	return Redirect::to('home')->with('message', __('quiz.message.add.success'));
	}

    public function view(){
       return view('quiz.view')->with(array(
       		'quizzes' => Quiz::all(),
       ));
   }
   
    public function delete(Request $request) {
		$quiz = Quiz::find(intval($request->id));
		$quiz->delete();
		return Redirect::to('home')->with('message', __('quiz.message.delete.success'));
	}

	public function make($id){
        return view('quiz.make')->with(array(
            'questions' => Quiz::find($id)->questions
        ));
    }
}
