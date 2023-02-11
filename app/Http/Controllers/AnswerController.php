<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;

class AnswerController extends Controller
{
    public function answer(Question $question)
    {
        $answer = Answer::where('question_id' , '=' , $question->id)->get();
        return view('posts/answer')->with(['answers' => $answer]);
    }
}
