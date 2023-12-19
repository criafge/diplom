<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function showCourse(Course $course)
    {
        return view('course', ['course' => $course]);
    }
}
