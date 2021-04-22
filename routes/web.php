<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ResearchGroupController;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/blog', BlogController::class);

Route::resource('/admin', AdminController::class)->except(['create', 'store', 'update', 'destroy']);

Route::resource('/courses', CourseController::class);

Route::resource('/research_groups', ResearchGroupController::class);

Route::resource('/contact', ContactController::class);
