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
        return view('posts/question')->with(['questions' => $question]);
    }
}
