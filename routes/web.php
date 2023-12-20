<?php

use App\Http\Controllers\IndexController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', 'App\Http\Controllers\AdminController')->middleware(Admin::class);

Route::group(['namespace' => 'App\Http\Controllers\Teacher', 'prefix' => 'teacher', 'middleware' => 'teacher'], function(){
    Route::get('/', 'IndexController');
    Route::post('create-lesson', 'CreateLessonController');
    Route::get('add-lesson', 'AddLessonController')->name('add-lesson');
    Route::post('create-lesson', 'CreateLessonController')->name('create-lesson');
    Route::get('course', 'CourseController')->name('teacher-course');
    Route::post('update-lesson/{lesson}', 'UpdateLessonController')->name('update-lesson');
});

Route::post('/update-data-user/{user}', 'App\Http\Controllers\UpdateDataUserController')->name('update-data-user')->middleware('auth');

Route::get('/courses', 'App\Http\Controllers\ShowCoursesController')->name('courses');

Route::post('create-sub', 'App\Http\Controllers\user\CreateSubController')->name('create-sub')->middleware('sub');

// Route::get('course/{course}', function(){
//     return view('course');
// })->name('course');




// Route::get('theory', function(){
//     return view('theory');
// })->name('theory');

// Route::get('account', function(){
//     return view('account');
// })->name('account');

// Route::get('theme', function(){
//     return view('theme');
// })->name('theme');
