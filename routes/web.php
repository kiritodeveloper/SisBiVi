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

Route::get('/', function () {
    return redirect(route('home'));
});

Route::get('/kirito','FileController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/libros', 'DocumentoController@index')->name('documentos.index');

Route::get('/documento/nuevo', 'DocumentoController@create')->name('documentos.create');
    
Route::post('/documento/crear','DocumentoController@store');
Route::get('/categoria/nuevo', 'CategoriaController@create')->name('categorias.create');
    
Route::post('/categoria/crear','CategoriaController@store');

Route::get('/hola','FileController@create')->name('hola.create');

Route::post('/hola','FileController@store');
	
Route::resource('/jiji', 'FileController');

Route::get('/upload', function () {
    return view('upload');
});
Route::resource('pictures', 'PictureController', ['only' => ['index', 'store', 'destroy']]);