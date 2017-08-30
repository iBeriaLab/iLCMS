<?php

use Illuminate\Http\Request;

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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/



Route::prefix('v0.1')->group(function () {

    /* Users */

    Route::get('/users', [
        'uses' => 'UserController@get'
    ]);


    /* Countries */

    Route::post('/country', [
        'uses' => 'CountriesController@post',
        'middleware' => 'auth'
    ]);

    Route::get('/countries', [
        'uses' => 'CountriesController@get'
    ]);

    Route::put('/country/{id}', [
        'uses' => 'CountriesController@put',
        'middleware' => 'auth'
    ]);

    Route::delete('/country/{id}', [
        'uses' => 'CountriesController@delete',
        'middleware' => 'auth'
    ]);


    /* Posts */

    Route::get('/posts', [
        'uses' => 'PostsController@get'
    ]);


});