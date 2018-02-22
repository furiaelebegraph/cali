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

Route::get('/', 'WelcomeController@index');
Route::get('/nosotros', 'WelcomeController@nosotros')->name('nosotros');
Route::get('/niveles-educativos', 'WelcomeController@niveles-educativos')->name('niveles-educativos');
Route::get('/instalaciones', 'WelcomeController@instalaciones')->name('instalaciones');
Route::get('/contacto', 'WelcomeController@contacto')->name('contacto');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

