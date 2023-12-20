<?php

namespace App\Http\Controllers\teacher;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function __invoke()
    {
        $course_id = Auth::user()->course_id;
        $lessons = Course::find($course_id)->lesson;
        return view('teacher-course', ['lessons' => $lessons]);
    }
}
