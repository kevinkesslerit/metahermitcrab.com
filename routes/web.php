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



Auth::routes();
Route::view('/', 'layouts.home.home')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
Route::view('/spcalc', 'layouts.tools.spcalc')->name('SPCalculator');
Route::post('/spcalc', 'SP_Controller@index')->name('SP_POST');
