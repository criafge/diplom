<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function createCourse(CreateCourseRequest $request){
        $data = $request->validated();
        $course = Course::create($data);
        return $course;
    }
    public function updateCourse(UpdateRequest $request, Course $course){
        $data = $request->validated();
        $course->update($data);
        return $course;
    }

    public function deleteCourse(Course $course){
        $course->delete();
        return response([]);
    }
}
