<?php

use App\Http\Controllers\ResearchGroupController;
use App\Models\ResearchGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;

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

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/course/create', [CourseController::class, 'create']);
Route::post('/course', [CourseController::class, 'store']);

Route::resource('/research_groups', ResearchGroupController::class);


