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

Route::resource("courses","CourseController");
<<<<<<< HEAD
Route::get("courses/{id}/lecture","CourseController@createLecture");
Route::post("courses/{id}/lecture","CourseController@storeLecture");
=======
>>>>>>> a0c65e5b88314b07cf6b3dce360546337c873afa
