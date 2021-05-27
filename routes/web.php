<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusinessOperationController;
use App\Http\Controllers\SdgController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ResearchGroupController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/verified-email', function () {
    return view('verified-email');
});

Route::get('/email', function () {
    return view('email');
});

Route::resource('/', WelcomeController::class);

Route::put('/blogs/changevisibility/{blog}', [BlogController::class, 'changeVisibility']);

Route::resource('/blogs', BlogController::class);

Route::resource('/sdgs', SdgController::class);

Route::resource('/admin', AdminController::class)->except(['create', 'store', 'update', 'destroy']);

Route::resource('/programs', ProgramController::class);

Route::resource('/research_groups', ResearchGroupController::class);

Route::resource('/activities', ActivityController::class);

Route::resource('/business_operations', BusinessOperationController::class);

Route::resource('/contact', ContactController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
