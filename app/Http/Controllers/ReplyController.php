<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Reply;

class ReplyController extends Controller
{
    public function make(Request $request, $id)
    {
        $quiz = Quiz::find($id);
        $answers = array();

        $i = 0;
        foreach ($request->answers as $answer) {
            $question_id = array_search($answer, $request->answers);
            $answers[$i++] = array('answer_id' => $answer, 'question_id' => $question_id);
        }
        DB::table('reply')->insert($answers);

        return Redirect::to('home')->with('message', __('quiz.message.make.finished'));
    }
}
