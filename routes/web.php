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

Route::get('/', 'MainController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/anketa', 'MainController@anketa');
Route::get('/uchat', 'MainController@uchat');

Route::post('/form1', 'MainController@form1');
Route::post('/form2', 'MainController@form2');

Route::get('/scrol18923net', 'MainController@scroll');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});