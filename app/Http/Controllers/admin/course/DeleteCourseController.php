<?php

namespace App\Http\Controllers\admin\course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class DeleteCourseController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Course $course)
    {
        $course->delete();
        return response([]);
    }
}
