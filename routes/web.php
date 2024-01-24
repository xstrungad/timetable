<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
})->name('navHome');




Auth::routes();

Route::middleware(['auth'])->group(function () { 
    //Teachers
    Route::resource('/teachers', App\Http\Controllers\TeacherController::class);
    Route::delete('/teachers/force/{id}', [App\Http\Controllers\TeacherController::class, 'forceDestroy'])->name('teachers.forceDestroy');
    Route::post('/teachers/restore/{id}', [App\Http\Controllers\TeacherController::class, 'restore'])->name('teachers.restore');
    //Subjects
    Route::resource('/subjects', App\Http\Controllers\SubjectController::class);
    Route::delete('/subjects/force/{id}', [App\Http\Controllers\SubjectController::class, 'forceDestroy'])->name('subjects.forceDestroy');
    Route::post('/subjects/restore/{id}', [App\Http\Controllers\SubjectController::class, 'restore'])->name('subjects.restore');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
