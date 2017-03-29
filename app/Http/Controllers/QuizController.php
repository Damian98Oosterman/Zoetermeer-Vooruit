<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Quiz;
>>>>>>> 358ec4eaa4af4443b0124cd7c89398a6f921cedd
use Illuminate\Http\Request;

class QuizController extends Controller
{
<<<<<<< HEAD
    //
=======
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
>>>>>>> 358ec4eaa4af4443b0124cd7c89398a6f921cedd
}
