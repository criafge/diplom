<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Language;
use Illuminate\Http\Request;

class ShowCoursesController extends Controller
{
    public function __invoke(Request $request, Language $language)
    {
        if(!empty($request->filter)){
            $courses = Course::where('language_id', $request->filter)->get();
        }else{
            $courses = Course::all();
        }
        return view('courses', ['languages' => $language->all(), 'courses' => $courses]);
    }
}
