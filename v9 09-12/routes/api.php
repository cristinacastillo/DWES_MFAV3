<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('dogs','api\DogController@list')->middleware('auth:api');
Route::get('dog/{id}', 'api\DogController@info');




Route::post('login',  'api\LoginController@login');
Route::post('logout', 'api\LoginController@logout');

/*
Route::fallback(function(){

	return response()
				->json([
					'error' => true,
					'mensaje' => 'Ruta no encontrada'
				],404);
});
*/



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
