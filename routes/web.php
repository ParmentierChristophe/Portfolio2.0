<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('portfolio.index');
});*/
Route::group(['middleware' => ['web']], function (){
    Route::resource('/', 'PortfolioController');
    Route::get('/login', ['as' => 'login','uses' => 'AuthController@login']);
    Route::post('/handleLogin', ['as' => 'handleLogin','uses' => 'AuthController@handleLogin']);
    Route::get('/projets', ['middleware' => 'projets','uses' => 'UsersController@projets']);
    Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
});

Route::resource('/projets', 'ProjetController');


