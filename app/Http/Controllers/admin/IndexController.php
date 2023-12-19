<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Language;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke(Language $language)
    {
        $courses = Course::all();
        $teachers = User::where('role_id', 2)->get();
        $data = array(['courses'=>$courses, 'teachers' => $teachers, 'languages' => $language->all()]);
        return $data;
    }
}
