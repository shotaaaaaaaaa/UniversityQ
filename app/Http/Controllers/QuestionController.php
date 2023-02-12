<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\University;

class QuestionController extends Controller
{
    public function question(University $university)
    {
        $question = Question::where('university_id' , '=' , $university->id)->get();
        return view('posts/question')->with(['questions' => $question, 'university' => $university]);
    }
    
    public function create(University $university)
    {
        //dd($request->all());
        return view('posts/create')->with(['university' => $university]);
    }
    
    public function store(Request $request, Question $question)
    {
        //dd($request->all());
        $input = $request['question'];
        //dd($input);
        $question->fill($input)->save();
        return redirect('/university/' . $question->university_id);
    }
}
