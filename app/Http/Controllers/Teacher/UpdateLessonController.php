<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class UpdateLessonController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Lesson $lesson)
    {
        $lesson->update([
            'title' => $request->title,
            'information' => $request->information,
            'num' => $request->num
        ]);
        return redirect()->back();
    }
}
