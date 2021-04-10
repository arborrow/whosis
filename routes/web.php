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

Route::post('admin/permission/update_roles', 'PermissionController@update_roles')->name('admin.permission.update_roles');
Route::post('admin/role/update_permissions', 'RoleController@update_permissions')->name('admin.role.update_permissions');
Route::post('admin/role/update_users', 'RoleController@update_users')->name('admin.role.update_users');

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth'])->name('admin');

Route::resource('room', RoomController::class);

Route::resource('school', SchoolController::class);

Route::post('admin/permission/update_roles', 'PermissionController@update_roles')->name('admin.permission.update_roles');
Route::post('admin/role/update_permissions', 'RoleController@update_permissions')->name('admin.role.update_permissions');
Route::post('admin/role/update_users', 'RoleController@update_users')->name('admin.role.update_users');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('phpinfo', 'AdminController@phpinfo')->name('phpinfo');
    Route::resource('permission', 'PermissionController');
    Route::resource('role', 'RoleController');
    Route::resource('user', 'UserController');
});
