<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseRequest;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function createCourse(CreateCourseRequest $request){
        $data = $request->validated();
    }
}
