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

//HOME
// showLoginForm: the method is already created internally with which to put this would be
// enough to have the login form as the main one.
Route::get('/', 'Auth\LoginController@showLoginForm')->name('home');

// Laravel incluye la funcion logout solo con el metodo post
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');




Route::get('/fake', 'HomeController@fake');


Route::middleware(['auth'])->group(function(){

	// DOG
	Route::prefix('dog')->group(function () {

	    Route::get('/dogs', 'DogController@list')->name('dogs.list');
	    Route::get('/infor', 'DogController@view')->name('dog.info');

	});

	// ADMIN
	Route::get('/admin', 'AdminController@index')->name('admin')->middleware('isAdmin');

});





Auth::routes();
Route::get('/home', 'HomeController@index')->name('main');
