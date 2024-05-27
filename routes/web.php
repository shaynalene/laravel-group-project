<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\_studentController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/student', [_studentController::class, 'index'])->name('student.index');