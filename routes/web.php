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

//User

Route::get('/', function () {
    return view('user.index');
});

Route::get('/secure', function () {
    return view('user.secure');
});

Route::get('/dashboard', function () {
    return view('admin.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

//Files

Route::get('dashboard/files', 'User\FilesController@index')->name('user.files.index');
Route::get('dashboard/files/create', 'User\FilesController@create')->name('user.files.create');
Route::post('dashboard/files', 'User\FilesController@store')->name('user.files.store');




