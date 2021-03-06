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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::post('enviado', 'BudgetsController@create')->name('enviado')->middleware('auth');
Route::get('/home','BudgetsController@index')->name('verContatos')->middleware('auth');
Route::delete('/contato/{id}', 'BudgetsController@destroy')->middleware('auth');

