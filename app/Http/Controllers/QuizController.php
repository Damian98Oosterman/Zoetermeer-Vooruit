<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
   public function show(){
       $quiz=new Quiz();
       return view('forms.quiz.show', ['quizes'=>$quiz->getQuiz()]);
   }

   public function showQuestions($id){
       $data['id']=$id;
       $quiz=new Quiz();
        $question=$quiz->showQuestions($data['id']);
       return view('forms.quiz.showquestions', ['questions'=>$question]);
   }
}