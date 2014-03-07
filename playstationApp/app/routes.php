<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Bind route parameters
Route::model('game', 'Game');

//Show pages
Route::get('/', 'GamesController@index');
Route::get('/create', 'GamesController@create');
Route::get('/edit/{game}', 'GamesController@edit');
Route::get('/delete/{game}', 'GamesController@delete');
//Users managment
Route::get('/register', 'UsersController@register');
Route::get('/logout', 'UsersController@logout');
Route::get('/login', 'UsersController@login');

//Handle submissions
Route::post('/create', 'GamesController@handleCreate');
Route::post('/edit', 'GamesController@handleEdit');
Route::post('/delete', 'GamesController@handleDelete');
//Users submissions
Route::post('/register', 'UsersController@handleRegister');
Route::post('/login', 'UsersController@handleLogin');