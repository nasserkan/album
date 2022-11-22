<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('home');
})->name("home");

Route::get("/admin/user","App\Http\Controllers\UserController@index")->name("userAdmin");
Route::get("/admin/create", "App\Http\Controllers\UserController@create")->name("createUser");
Route::post("/admin/store", "App\Http\Controllers\UserController@store")->name("storeUser");
Route::get("/admin/edit/{id}", "App\Http\Controllers\UserController@edit")->name("editUser");
Route::post("/admin/update/{id}", "App\Http\Controllers\UserController@update")->name("updateUser");
Route::get("/admin/destroy/{id}", "App\Http\Controllers\UserController@destroy")->name("destroyUser");
// Route::get("/admin/User/{user_id}", "userController@show")->name("showUser");

Route::get("/admin/album","App\Http\Controllers\AlbumController@index")->name("albumAdmin");
Route::get("/admin/createAlbum", "App\Http\Controllers\AlbumController@create")->name("createAlbum");
Route::post("/admin/storeAlbum", "App\Http\Controllers\AlbumController@store")->name('storeAlbum');
Route::get('/admin/showAlbum/{id}', "App\Http\Controllers\UserController@show")->name('showAlbum');
Route::get("admin/destroyAlbum/{id}","App\Http\Controllers\AlbumController@destroy")->name("destroyAlbum");

Route::get('/admin/photo', "App\Http\Controllers\PhotoController@index")->name("photoAdmin");
Route::get('admin/createPhoto', "App\Http\Controllers\PhotoController@create")->name("createPhoto");
Route::post("/admin/storePhoto", "App\Http\Controllers\PhotoController@store")->name("storePhoto");
Route::get("/admin/editPhoto/{id}", "App\Http\Controllers\PhotoController@edit")->name("editPhoto");
Route::post("/admin/updatePhoto/{id}","App\Http\Controllers\PhotoController@update")->name("updatePhoto");
Route::get("/admin/destroyPhoto/{id}","App\Http\Controllers\PhotoController@destroy")->name("destroyPhoto");


