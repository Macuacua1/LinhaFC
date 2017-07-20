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
Route::get('/findDistrito','EnderecoController@findDistrito');
Route::get('/findLocalidade','EnderecoController@findLocalidade');
Route::post('/criar-conta','UserController@criarConta');
Route::get('perfil','UserController@getPerfil');
//Route::post('/register','Auth/RegisterController@register');

//Route::get('login', 'Auth\AuthController@getLogin');
//Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
//Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
//
//// Registration routes...
//Route::get('register', 'Auth\AuthController@getRegister');
//Route::post('registar', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);
