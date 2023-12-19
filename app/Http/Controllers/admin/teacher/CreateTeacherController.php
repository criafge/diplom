<?php

namespace App\Http\Controllers\admin\teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTeacherRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CreateTeacherController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(CreateTeacherRequest $request)
    {
        $teacher = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'course_id' => $request->course_id,
            'role_id' => 2
        ]);
        return $teacher;
    }
}
