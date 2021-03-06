<?php

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
    return view('welcome');
});

Route::get('/allMovies', 'MoviesController@index');

Route::get('/singleMovie/{id}', 'MoviesController@show');

Route::get('/createMovie', 'MoviesController@create');
Route::post('/createMovie', 'MoviesController@store');

Route::post('/comment/add/{id}', 'CommentsController@store');

Route::get('/genres/{genre}', 'GenresController@show');


