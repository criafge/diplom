<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Middleware\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'admin' ,'prefix' => 'admin'], function () {
    Route::post('create-course', [CourseController::class, 'createCourse']);
    Route::get('/', [AdminController::class, 'index']);
    Route::patch('/update/{course}', [CourseController::class, 'updateCourse']);
    Route::delete('/delete/{course}', [CourseController::class, 'deleteCourse']);
    Route::delete('delete-teacher/{user}', [AdminController::class, 'deleteTeacher']);
    Route::post('create-teacher', [AdminController::class, 'createTeacher']);
})->middleware(Admin::class);

