<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $courses = Course::paginate(3);
        return view('index', compact('courses'));
    }
}
