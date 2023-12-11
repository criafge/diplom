<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [AdminController::class, 'admin'])->middleware(Admin::class);

Route::get('/teacher', [HomeController::class, 'cabinet']);



Route::get('/courses', function(){
    return view('courses');
})->name('courses');

Route::get('course/{course}', function(){
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
