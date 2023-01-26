<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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

// index = show all data
// show = show a single data 
// create = show a form in user
// store = store a data
// update = update a data
// destroy = delete a data

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register', [UserController::class, 'register']);
Route::get('/home', [UserController::class, 'home'])->middleware('auth');

Route::post('/store', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login/loginQuery', [UserController::class, 'loginQuery']);

Route::post('/home/store', [StudentController::class, 'store']);
Route::put('/home/{student}', [StudentController::class, 'update']);
Route::delete('/home/{student}', [StudentController::class, 'destroy']);
