<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('admin');
    }

    public function index(){
        $courses = Course::all();
        return $courses;
    }

    
}
