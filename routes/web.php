<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
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
Route::get('logout','Auth\LoginController@logout')->middleware('auth')->name('logout') ;



Route::middleware(['auth'])->group(function(){

	// DOG
	Route::prefix('dog')->group(function () {

	    Route::get('/dogs', 'DogController@list')->name('dogs.list');
	    Route::get('/info', 'DogController@view')->name('dog.info');
	    Route::post('/req', 'DogController@requestAdop')->name('dog.req');
	    Route::post('/edit', 'DogController@edit')->name('dog.edit');
	    Route::post('/addComment', 'DogController@addComment')->name('add.comment');

	    Route::post('/delete', 'CommentDogController@delete')->name('delete.comment');
	    Route::post('/editComment', 'CommentDogController@edit')->name('edit.comment');
	 
	    Route::middleware(['checkUserProfile'])->group(function(){

	    	Route::post('/add', 'DogController@add')->name('dog.add');
	    	
	    	
	    });

	});

	Route::prefix('adop')->group(function () {

	    Route::get('/info', 'AdoptionController@showAdops')->name('adop.info');

	    Route::middleware(['checkUserProfile'])->group(function(){

	    	Route::get('/reqs', 'AdoptionController@showRequest')->name('adop.req');
	    	Route::get('/status', 'AdoptionController@changeStatus')->name('adop.status');
	    	
	    });
	    

	});

});

	// ADMIN
	Route::get('admin','AdminController@index' )->middleware('checkUserProfile')->name('admin') ;







Auth::routes();
Route::get('/home', 'HomeController@index')->name('main');



Route::fallback(function(){

	return view('404');
});



Route::view('/fake','welcome')->name('fake');
