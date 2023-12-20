<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class ShowLessonsController extends Controller
{
    public function __invoke(Request $request, Course $course)
    {
        $lessons = $course->lesson;
        return view('course', ['lessons' => $lessons]);
    }
}
