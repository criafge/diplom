<?php

namespace App\Http\Controllers\admin\teacher;

use App\Http\Controllers\Controller;
use App\Models\User;

class DeleteTeacherController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(User $user)
    {
        $user->delete();
        return response([]);
    }
}
