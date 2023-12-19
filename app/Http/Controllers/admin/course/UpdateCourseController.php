<?php

namespace App\Http\Controllers\admin\course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class UpdateCourseController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Course $course)
    {
        $data = $request->validated();
        $course->update($data);
        $errors = $data->errors(); //вывод ошибок на поля в админке
        return $course;
    }
}
