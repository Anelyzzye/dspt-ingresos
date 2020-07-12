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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Inicio de sesión
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
 

 //Registro
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');       

//
Route::get('/home', 'HomeController@index')->name('home');

//Sitio de Presencia
Route::get('/', function(){return view('web.inicio');})->name("sitio.inicio");
Route::get('/quienes-somos', function(){return view('web.quienes');})->name("sitio.descripcion");
Route::get('/tramites', function(){return view('web.tramites');})->name("sitio.tramites");
Route::get('/contacto', function(){return view('web.contacto');})->name("sitio.contacto");
Route::get('/noticias', function(){return view('web.noticias');})->name("sitio.noticias");

//Intranet Administrativo
Route::post('/acceso', 'AceesoController@index')->name("admin.acceso");

//CRUD Ciudadano
Route::get('/ciudadano/all', 'CiudadanoController@index')->name("ciudadano.index");
Route::get('/ciudadano/create', 'CiudadanoController@create')->name("ciudadano.create");
Route::post('/ciudadano', 'CiudadanoController@store')->name("ciudadano.store");
Route::get('/ciudadano/{id}/edit', 'CiudadanoController@edit')->name("ciudadano.edit");
Route::patch('/ciudadano/{id}', 'CiudadanoController@update')->name("ciudadano.update");

//CRUD Ciudadano
Route::get('/donacion/all', 'PorcentajeDonadoController@index')->name("donacion.index");
Route::get('/donacion/create', 'PorcentajeDonadoController@create')->name("donacion.create");
Route::post('/donacion', 'PorcentajeDonadoController@store')->name("donacion.store");
Route::get('/donacion/{id}/edit', 'PorcentajeDonadoController@edit')->name("donacion.edit");
Route::patch('/donacion/{id}', 'PorcentajeDonadoController@update')->name("donacion.update");

//CRUD Ciudadano
Route::get('/tramites/all', 'TipotramiteController@index')->name("tramites.index");
Route::get('/tramites/create', 'TipotramiteController@create')->name("tramites.create");
Route::post('/tramites', 'TipotramiteController@store')->name("tramites.store");
Route::get('/tramites/{id}/edit', 'TipotramiteController@edit')->name("tramites.edit");
Route::patch('/tramites/{id}', 'TipotramiteController@update')->name("tramites.update");