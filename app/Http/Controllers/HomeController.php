<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user, Language $language)
    {
        $user = Auth::user();
        $role = Auth::user()->role->id;
        switch ($role) {
            case 1:
                return view('admin', ['languages' => $language->all()]);
            case 2:
                return view('home');
            case 3:
                return view('home');
        }
    }
}
