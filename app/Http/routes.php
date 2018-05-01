<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Protected routes. Protected with the auth middleware in the controller's constructor
Route::get('/home', 'ContentController@getHome');
Route::get('/content/view', 'ContentController@index');
Route::get('/content/new', 'ContentController@create');
Route::post('/content/add', 'ContentController@store');
Route::get('/tasks/view', 'TasksController@index');
Route::get('/tasks/new', 'TasksController@create');
Route::post('/tasks/add', 'TasksController@store');
Route::get('/tasks/view/{id}', 'TasksController@show');

// API routes
Route::get('/api/v1/{user}/contents ', ['middleware' => 'auth.basic', 'uses' => 'ApiController@getFetchAll']);
Route::get('/api/v1/{user}/contents/{id} ', ['middleware' => 'auth.basic', 'uses' => 'ApiController@getFetchSingle']);
