<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateLessonRequest;
use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;

class CreateLessonController extends Controller
{

    public function __invoke(CreateLessonRequest $request)
    {
        $course_id = Auth::user()->course_id;
        Lesson::create([
            'title' => $request->title,
            'information' => $request->information,
            'num' => $request->num,
            'course_id' => $course_id
        ]);
        return redirect()->back(); //поменять на страницу курса
    }
}
