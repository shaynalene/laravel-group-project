<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\_studentController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/student', [_studentController::class, 'index'])->name('student.index');


#create another route just copy paste on the student route and add another function
Route::get('/student/create', [_studentController::class, 'create'])->name('student.create');

#for your form action route
Route::post('/student', [_studentController::class, 'saveRecord'])->name('student.saveRecord');