<?php

namespace App\Http\Controllers;

use App\Models\Language;

class IndexController extends Controller
{
    public function index(){
        $languages = Language::paginate(3);
        return view('index', compact('languages'));
    }
}
