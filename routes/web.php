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
//Route::get('/', function(){return view('web.inicio');})->name("sitio.inicio");
Route::get('/quienes-somos', function(){return view('web.quienes');})->name("sitio.descripcion");
Route::get('/tramites', function(){return view('web.tramites');})->name("sitio.tramites");
Route::get('/contacto', function(){return view('web.contacto');})->name("sitio.contacto");
/*Route::get('/noticias', function(){return view('web.noticias');})->name("sitio.noticias");*/

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

//CRUD tramites
Route::get('/tramites/all', 'TipotramiteController@index')->name("tramites.index");
Route::get('/tramites/create', 'TipotramiteController@create')->name("tramites.create");
Route::post('/tramites', 'TipotramiteController@store')->name("tramites.store");
Route::get('/tramites/{id}/edit', 'TipotramiteController@edit')->name("tramites.edit");
Route::patch('/tramites/{id}', 'TipotramiteController@update')->name("tramites.update");

//CRUD Avisos
Route::get('/', 'AvisoController@publicado')->name("avisos.publicado");
Route::get('/avisos/all', 'AvisoController@index')->name("avisos.index");
Route::get('/avisos/create', 'AvisoController@create')->name("avisos.create");
Route::post('/avisos', 'AvisoController@store')->name("avisos.store");
Route::get('/avisos/{id}/edit', 'AvisoController@edit')->name("avisos.edit");
Route::patch('/avisos/{id}', 'AvisoController@update')->name("avisos.update");
Route::delete('/avisos/{id}','AvisoController@destroy')->name("avisos.delete");

//CRUD Eventos
Route::get('/noticias', 'EventoController@publicado')->name("eventos.publicado");
Route::get('/eventos/all', 'EventoController@index')->name("eventos.index");
Route::get('/eventos/create', 'EventoController@create')->name("eventos.create");
Route::post('/eventos', 'EventoController@store')->name("eventos.store");
Route::get('/eventos/{id}', 'EventoController@show')->name("eventos.show");
Route::get('/eventos/{id}/edit', 'EventoController@edit')->name("eventos.edit");
Route::patch('/eventos/{id}', 'EventoController@update')->name("eventos.update");
Route::delete('/eventos/{id}','EventoController@destroy')->name("eventos.delete");

//CRUD Citas
Route::get('/cita/all', 'CitaController@index')->name("cita.index");
Route::get('/cita/create', 'CitaController@create')->name("cita.create");
Route::post('/cita', 'CitaController@store')->name("cita.store");
Route::get('/cita/{id}/edit', 'CitaController@edit')->name("cita.edit");
Route::patch('/cita/{id}', 'CitaController@update')->name("cita.update");