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

//Root
Route::get('homepage', function(){
    return view('home');
});

Route::resource('Bisection', 'BisectionController');
Route::get('show/Bisection', 'ShowBisectionController@index');

Route::resource('FalsePosition', 'FalsePositionController');
Route::get('show/FalsePosition', 'ShowFalsePositionController@index');

Route::resource('OnePointIteration', 'OnePointIterationController');
Route::get('show/OnePointIteration', 'ShowOnePointIterationController@index');

Route::get('NewtonRarpson', 'NewtonRaspsonController@index');
Route::get('show/NewtonRarpson', 'ShowNewtonRarpsoncontroller@index');

Route::get('Secant', 'SecantController@index');
Route::get('show/Secant', 'ShowSecantControlle@index');
//Linear