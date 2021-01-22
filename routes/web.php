<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WorkplaceController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TopicController;

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
})->name('home');

Route::resource('workplaces', WorkplaceController::class);
Route::resource('colleges', CollegeController::class);
Route::resource('directions', DirectionController::class);
Route::resource('roles', RoleController::class);
Route::resource('topics', TopicController::class);
Route::resource('users', UserController::class);
Route::resource('group_exams', Group_examcontroller::class);
