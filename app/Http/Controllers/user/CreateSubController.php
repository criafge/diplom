<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateSubController extends Controller
{
    public function __invoke(Request $request)
    {
        $course_cost = Course::find($request->course_id)->cost;
        $duration_in_seconds = time() + ($request->duration * 30 * 86400);
        $duration = date('Y-m-d H:i:s', $duration_in_seconds);
        Subscription::create([
            'duration' => $request->duration,
            'course_id' => $request->course_id,
            'date_end' => $duration,
            'user_id' => Auth::user()->id,
            'cost' => $course_cost * $request->duration
        ]);
        return redirect()->back();
    }
}
