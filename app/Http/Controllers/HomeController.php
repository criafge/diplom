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
    public function index()
    {
        $role = Auth::user()->role->id;
        switch ($role) {
            case 1:
                return redirect('/admin');
            case 2:
                return redirect('/teacher');
            case 3:
                return view('home');
        }
    }

    public function cabinet(){
        return view('cabinet');
    }
}
