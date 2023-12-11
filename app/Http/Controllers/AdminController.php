<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTeacherRequest;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function admin(){
        return view('admin');
    }

    public function index(){
        $courses = Course::all();
        $teachers = User::where('role_id', 2)->get();
        $data = array(['courses'=>$courses, 'teachers' => $teachers]);
        return $data;
    }

    public function createTeacher(CreateTeacherRequest $request){
        $teacher = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'course_id' => $request->course_id,
            'role_id' => 2
        ]);
        return $teacher;
    }
    public function deleteTeacher(User $user){
        $user->delete();
        return response([]);
    }
    
}
