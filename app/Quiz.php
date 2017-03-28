<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table='quiz';
    public function getQuiz(){
        return Quiz::all();
    }
    public function showQuestions($id){
        return Quiz::join('question', 'quiz.id', '=', 'question.quiz_id')->where('quiz_id', $id)->get();
    }
}
