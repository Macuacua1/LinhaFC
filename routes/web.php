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

//Route::get('/', function () {
//    return view('admin/contacto/registar');
//});
Route::get('/home', function () {
    return view('layouts/master');
});
Auth::routes();
Route::get('/','EnderecoController@provfunct');
Route::post('/findDistrito','EnderecoController@findDistrito');
Route::post('/findLocalidade','EnderecoController@findLocalidade');
Route::post('/findmotivo','EnderecoController@findmotivo');
Route::post('/criar-conta','UserController@criarConta');
Route::get('perfil','UserController@getPerfil');
Route::resource('contacto','ContactoController');
Route::resource('user','UserController');
Route::post('/registarcontacto','ContactoController@addcontacto');
Route::post('/addUtente','ContactoController@addUtente');
//Route::get('/updateUser/{id}','UserController@updateUser');
//Route::post('/register','Auth/RegisterController@register');

//Route::get('login', 'Auth\AuthController@getLogin');
//Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
//
//// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
//Route::post('registar', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);
