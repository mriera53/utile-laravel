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

Route::get('registro', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::get('t', 't@t')->name('register');

//inicio
Route::resource('home', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

// Eventos
Route::resource('/eventos', 'EventosController');

// base de datos
Route::get('/reserva', 'ReservaController@reserva');

Route::get('cantidadDePersonas', 'ReservasController@index');
Route::get('/ubicacion', 'ReservasController@index');
Route::get('/tipoDeFiesta', 'ReservasController@index');

// agregar reserva
Route::get('/reserva/agregar', 'ReservaController@create');
Route::post('/reserva/agregar', 'ReservaController@store');

// editar reserva
Route::get("editarReserva/{id}", "ReservaController@editar");
Route::post("editarReserva/{id}", "ReservaController@update");

// eliminar reser
Route::get("eliminarReserva/{id}", "ReservaController@eliminar");


 Route::get('/reserva/{id}', 'ReservaController@show');
