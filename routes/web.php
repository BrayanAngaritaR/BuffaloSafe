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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::prefix('/dashboard')->group(function(){
	Route::get('/', 'User\DashboardController@index')
		->name('user.admin.index')
		->middleware('auth');

	//Set Lang

	Route::get('/{locale}', function ($locale) {
	    \Session::put('locale', $locale);
	    return back();
	})->name('user.set.locale');

	//Files
	Route::get('/files', 'User\FilesController@index')
		->name('user.files.index');

	Route::get('/files/create', 'User\FilesController@create')
	->name('user.files.create');

	Route::post('/files', 'User\FilesController@store')
	->name('user.files.store');

});






