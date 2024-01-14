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

Route::get('/welcome', function () {
    return view('welcome');
});
//Route::get('/', function () {
//    return view('index');
//})->name('navHome');
Route::get('/', [App\Http\Controllers\TeacherController::class, 'index'])->name('teachers.index');

Route::get('/index', function () {
    return view('index');
})->name('navHome');

// Teacher routes
Route::get('/teachers', [App\Http\Controllers\TeacherController::class, 'index'])->name('teachers.index');
Route::resource('/teachers', App\Http\Controllers\TeacherController::class);

// Subject routes
Route::get('/subjects', [App\Http\Controllers\SubjectController::class, 'index'])->name('subjects.index');
Route::resource('/subjects', App\Http\Controllers\SubjectController::class);
