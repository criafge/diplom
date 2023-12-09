<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [AdminController::class, 'admin']);

Route::get('/courses', function(){
    return view('courses');
})->name('courses');


Route::get('course', function(){
    return view('course');
})->name('course');

Route::get('theory', function(){
    return view('theory');
})->name('theory');

Route::get('account', function(){
    return view('account');
})->name('account');

Route::get('theme', function(){
    return view('theme');
})->name('theme');
