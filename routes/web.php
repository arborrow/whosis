<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/courses', function () {
    return view('courses');
})->middleware(['auth'])->name('courses');

Route::get('/students', function () {
    return view('students');
})->middleware(['auth'])->name('students');

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth'])->name('admin');

Route::resource('room', RoomController::class);

Route::resource('school', SchoolController::class);

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('phpinfo', 'AdminController@phpinfo')->name('phpinfo');
});
