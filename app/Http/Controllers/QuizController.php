<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\QuizRequest;
use App\Quiz;
use App\Reply;

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
   
    public function delete(Request $request) {
		$quiz = Quiz::find(intval($request->id));
		$quiz->delete();
		return Redirect::to('home')->with('message', __('quiz.message.delete.success'));
	}
	
	public function statistics($id) {
		$quiz = Quiz::find($id);
		$answers = [];
		foreach($quiz->questions as $question){
			$answers[$question->id] = DB::select('SELECT answer.name, COUNT(*) AS frequency FROM reply INNER JOIN answer ON reply.answer_id = answer.id WHERE answer.question_id IN (SELECT id FROM question WHERE question.quiz_id = ?)GROUP BY answer.name', [$id]);
		}
		return $answers;
	}
}
