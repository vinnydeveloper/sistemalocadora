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

Route::get('/', function () {
    return view('welcome');
});

Route::get('cadastro', function () {
    return view('cadastro', ["usuarios" => [
        ["nome" => "Vinicius"],
        ["nome" => "Rafa"]
    ]]);
});

Route::get('compras', "comprasController@index");

Route::get('ator', "atorController@index")->middleware('checkadmin');

Route::get('ator/cadastro', "atorController@create");
Route::post('ator/cadastro', "atorController@create");
Route::get('ator/editar/{id}', "atorController@editar");
Route::post('ator/editar/{id}', "atorController@editar");
Route::get('deletarAtor/{id}', "atorController@deletarAtor");

Route::get('filme', "FilmeController@todosFilmes");
Route::get('filme/editar/{id}', "FilmeController@editar");
Route::post('filme/editar/{id}', "Filmecontroller@editar");

Route::get('deletarFilme/{id}', "FilmeController@deletarFilmes");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
