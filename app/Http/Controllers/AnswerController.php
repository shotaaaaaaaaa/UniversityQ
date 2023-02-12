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
        return view('posts/answer')->with(['answers' => $answer , 'question' => $question]);
    }
    
    public function make(Question $question)
    {
        return view('posts/make')->with(['question' => $question]);
    }
    
    public function insert(Request $request, Answer $answer)
    {
        //dd($request);
        $input = $request['answer'];
        //dd($input);
        $answer->fill($input)->save();
        return redirect('/question/' . $answer->question_id);
    }
}
