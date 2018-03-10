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
Route::get('/niveles-educativos', 'WelcomeController@nivelesEducativos')->name('niveles-educativos');
Route::get('/instalaciones', 'WelcomeController@instalaciones')->name('instalaciones');
Route::get('/contacto', 'WelcomeController@contacto')->name('contacto');

Route::group(['middleware'=> 'auth'],function(){
  Route::resource('nivel','NivelController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('nivel/{id}/update','NivelController@update');
  Route::delete('nivel/{id}/delete','NivelController@destroy')->name('nivel.destroy');
  Route::get('nivel/{id}/deleteMsg','NivelController@DeleteMsg');
});

Route::group(['middleware'=> 'auth'],function(){
  Route::resource('galeria','GaleriaController', ['only' => ['create','store', 'index', 'edit']]);
  Route::post('galeria/cargarGale', 'GaleriaController@cargarGaleria');
  Route::post('galeria/{id}/update','GaleriaController@update');
  Route::get('galeria/{id}/delete','GaleriaController@destroy');
  Route::get('galeria/{id}/deleteMsg','GaleriaController@DeleteMsg');
});

Route::post('enviar_correo', 'WelcomeController@enviarCorreo');


Route::get('nivel-educativo/{id}','NivelController@nivelEducativo')->name('nivel.nivel-educativo');

Route::group(['prefix' => 'adminis'], function(){
	Auth::routes();
});

Route::get('/acerca-cali', 'WelcomeController@acerca')->name('acerca');

Route::get('/home', 'HomeController@index')->name('home');

