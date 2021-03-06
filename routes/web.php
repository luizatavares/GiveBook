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
Route::get('/', 'InicioController@inicio')->name('inicio');
Route::get('/quemsomos', 'InicioController@quemsomos')->name('quemsomos');
Route::get('/categorialivros/{id}', 'LivrosController@buscacategoria')->name('buscacategoria');
Route::get('/visualizarlivro/{id}', 'LivrosController@visualizarlivro')->name('visualizarlivro');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'painel', 'middleware'=>'auth'], function(){

	Route::get('/meusdados', 'UsuariosController@meusdados')->name('meusdados');

	Route::post('/salvardados', 'UsuariosController@salvardados')->name('salvardados');	

	Route::group(['prefix' => 'livros'], function(){
		Route::get('/meuslivros', 'LivrosController@meuslivros')->name('meuslivros');
		Route::get('/cadastrarlivro', 'LivrosController@cadastrarlivro')->name('cadastrarlivro');

		Route::post('/salvarlivro','LivrosController@salvarlivro')->name('salvarlivro');

		Route::get('/editalivro/{id}', 'LivrosController@editalivro')->name('editalivro');
		Route::post('/gravarlivro','LivrosController@gravarlivro')->name('gravarlivro');
		Route::get('/excluilivro/{id}', 'LivrosController@excluilivro')->name('excluilivro');

	});

	Route::group([ 'middleware'=>'admin'], function(){
		Route::group(['prefix' => 'generos'], function(){
			Route::get('/', 'GenerosController@generos')->name('generos');
			Route::get('/cadastrargenero', 'GenerosController@cadastrargenero')->name('cadastrargenero');

			Route::post('/salvargenero','GenerosController@salvargenero')->name('salvargenero');

			Route::get('/editargenero/{id}', 'GenerosController@editargenero')->name('editargenero');
			Route::post('/gravargenero','GenerosController@gravargenero')->name('gravargenero');
			Route::get('/excluirgenero/{id}', 'GenerosController@excluirgenero')->name('excluirgenero');

		});


		Route::group(['prefix'=>'users'], function(){
			Route::get('/', 'UsuariosController@usuarios')->name('usuarios');
			Route::get('/editartipo/{id}/{tipo}', 'UsuariosController@tipo')->name('alterartipo');
		
		});
	});
	
});