<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\LessonController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/course/{id}', [CourseController::class, 'show']);

Route::get('/modules', [ModuleController::class, 'index']);

Route::get('/lessons', [LessonController::class, 'index']);