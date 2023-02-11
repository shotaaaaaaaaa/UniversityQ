<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;
use App\Models\Category;

class UniversityController extends Controller
{
    public function university(Category $category)
    {
        $university = University::where('category_id' , '=' , $category->id)->get();
        return view('posts/university')->with(['universities' => $university]);
    }
}
