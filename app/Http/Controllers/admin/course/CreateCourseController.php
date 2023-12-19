<?php

namespace App\Http\Controllers\admin\course;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCourseRequest;
use App\Models\Course;

class CreateCourseController extends Controller
{
    public function __invoke(Course $course, CreateCourseRequest $request)
    {
        $data = $request->validated();
        $course = Course::create($data);
        return $course;
    }
}
