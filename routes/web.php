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

Route::get('/', 'universidadesController@distritos')->name('inicio');
Route::post('/sugerencia','universidadesController@crearsugerencia')->name('sugerencia');

Route::get('/universidades','universidadesController@universidad')->name('universidad');
Route::any('/universidades/{nombre}','universidadesController@getUniversidad')->name('uni');


Route::get('/ranking', 'universidadesController@ranking')->name('ranking');
Route::get('/perfil','usuarioController@datos')->name('perfil');

Route::get('/nosotros', function(){
	return view('content.nosotros');
})->name('nosotros');

Route::get('/login','usuarioController@index')->name('login');

Route::post('/login','usuarioController@login')->name('loginuser');

Route::get('/registrar','usuarioController@index_registro')->name('registrar');

Route::post('/registrar','usuarioController@registrar');


/* --------------------- Administrador ------------------------*/
Route::get('admin',function(){
	return view('admin_content.login_admin');
})->name('login_admin');


Route::get('admin/home',function(){
	return view('admin_content.index_admin');
})->name('admin');

Route::get('admin/usuarios',function(){
	return view('admin_content.usuarios_admin');
})->name('usuarios');

Route::get('admin/sugerencias',function(){
	return view('admin_content.sugerencias_admin');
})->name('sugerencias');

Route::get('admin/graficos',function(){
	return view('admin_content.graficos_admin');
})->name('graficos');

Route::get('admin/universidades',function(){
	return view('admin_content.universidades_admin');
})->name('universidades');

Route::get('admin/noticias',function(){
	return view('admin_content.noticias_admin');
})->name('noticias');

Route::get('/logout','usuarioController@logout')->name('logout');

Route::get('/editar_perfil', function () {
	return view('content.editar_perfil');
})->name('editar');








