<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table='question';

    public function show($id){
        return Question::join('answer', 'question.id', '=', 'answer.question_id')->where('question_id', $id)->get();
    }
}
