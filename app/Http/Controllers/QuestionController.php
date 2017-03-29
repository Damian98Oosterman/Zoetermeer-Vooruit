<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function answers($id){
        $data['id']=$id;
        $answer=Question::find($data['id'])->answers;
        return view('show.answers', ['answers'=>$answer]);
    }
}
