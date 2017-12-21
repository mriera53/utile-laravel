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
Route::get('logout', 'Auth\LoginController@logout');
/*
// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');
*/









/*
Route::get('registro', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::get('t', 't@t')->name('register');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
*/







//inicio
Route::resource('home', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home/{id}', 'HomeController@store')->name('home');


Route::get('/', 'HomeController@index')->name('home');


// Eventos
Route::resource('/eventos', 'EventosController');

// base de datos
Route::get('/reserva', 'ReservaController@reserva');

Route::get('cantidadDePersonas', 'ReservasController@index');
Route::get('/ubicacion', 'ReservaController@index');
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


 // base de datos
 Route::get('/productos', 'ProductosController@productos');
 // agregar productos
 Route::get('/productos/agregar', 'ProductosController@create');
 Route::post('/productos/agregar', 'ProductosController@store');
