<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Models\Group;
use App\Http\Controllers\CourseController;
use App\Models\Course;
use App\Http\Controllers\SubjectController;
use App\Models\Subject;
use App\Http\Controllers\FileController;
use App\Models\File;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::resource('courses', CourseController::class);
    Route::resource('groups', GroupController::class);
    Route::resource('subjects', SubjectController::class);
    Route::resource('files', FileController::class);
});

Route::get('/students/{name}',[GroupController::class, 'students'])
    ->name('students.groups');

Route::get('/subjects/{name}',[SubjectController::class, 'index'])
    ->name('group.subjects');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
