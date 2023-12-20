<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;

class DeleteSubController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Subscription $subscription)
    {
        $subscription->delete();
        return redirect()->back();
    }
}
