<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'App\Http\Controllers\admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'course'], function () {
        Route::post('create-course', 'CreateCourseController');
        Route::patch('/update/{course}', 'UpdateCourseController');
        Route::delete('/delete/{course}', 'DeleteCourseController');
    });

    Route::group(['namespace' => 'teacher'], function () {
        Route::delete('delete-teacher/{user}', 'DeleteTeacherController');
        Route::post('create-teacher', 'CreateTeacherController');
    });
    Route::group(['namespace' => 'subscription'], function () {
        Route::delete('delete-subscription/{subscription}', 'DeleteSubscriptionController');
        Route::post('create-subscription', 'CreateSubscriptionController');
    });
    Route::get('/', 'IndexController');
})->middleware('admin');
