<?php

namespace App\Http\Controllers;

use App\Quiz;

class QuizController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

    public function show(){
       return view('show.quiz', ['quizes'=>Quiz::all()]);
   }

   public function showQuestions($id){
       $data['id']=$id;
        $question=Quiz::find($data['id'])->questions;
       return view('show.questions', ['questions'=>$question]);
   }
}