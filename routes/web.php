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