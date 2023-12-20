<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddLessonRequest;
use Illuminate\Http\Request;

class AddLessonController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('add-lesson');
    }
}
