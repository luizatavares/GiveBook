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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'painel', 'middleware'=>'auth'], function(){

	Route::get('/meusdados', 'UsuariosController@meusdados')->name('meusdados');

	Route::post('/salvardados', 'UsuariosController@salvardados')->name('salvardados');	

	Route::group(['prefix' => 'livros'], function(){
		Route::get('/meuslivros', 'LivrosController@meuslivros')->name('meuslivros');
		Route::get('/cadastrarlivro', 'LivrosController@cadastrarlivro')->name('cadastrarlivro');
	});

});
