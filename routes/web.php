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
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::get('exercise', 'ExerciseController@index');
Route::post('exercise', 'ExerciseController@test');

Route::get('cards', 'CardsController@index'); 
Route::get('cards/{card}', 'CardsController@show'); 
Route::post('cards', 'CardsController@store'); 

