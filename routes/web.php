<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;


Route::get('course',[CourseController::class,'index'])->name('courseGet');

Route::get('courseInsert',[CourseController::class,'courseInsert'])->name('courseInsert');
Route::get('courseUpdate/{id}',[CourseController::class,'courseUpdate'])->name('courseUpdate');

Route::post('courseInsertPost',[CourseController::class,'courseInsertPost'])->name('courseInsertPost');
Route::post('courseUpdatePost/{id}',[CourseController::class,'courseUpdatePost'])->name('courseUpdatePost');

Route::get('courseDelete/{id}',[CourseController::class,'courseDelete'])->name('courseDelete');