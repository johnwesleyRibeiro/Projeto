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

Route::prefix('user')->middleware('auth')->group(function() {
    Route::get('/', 'UsuariosController@index')->name('users.index');
});
Route::get('/usuarios', 'UsuariosController@index')->name('usuarios.index');
Route::get('/usuarios/novo', 'UsuariosController@create')->name('usuarios.create')->middleware('auth');
Route::post('/usuarios', 'UsuariosController@store')->name('usuarios.store')->middleware('auth');
Route::get('/usuarios/edit/{id}', 'UsuariosController@edit')->name('usuarios.edit')->middleware('auth');
Route::any('/usuarios/{id}', 'UsuariosController@update')->name('usuarios.update')->middleware('auth');
Route::delete('/usuarios/{id}', 'UsuariosController@destroy')->name('usuarios.destroy')->middleware('auth');





Route::get('/alunos', 'AlunosController@index')->name('alunos.index');
Route::get('/alunos/novo', 'AlunosController@create')->name('alunos.create')->middleware('auth');
Route::post('/alunos', 'AlunosController@store')->name('alunos.store')->middleware('auth');
Route::get('/alunos/edit/{id}', 'AlunosController@edit')->name('alunos.edit')->middleware('auth');
Route::any('/alunos/{id}', 'AlunosController@update')->name('alunos.update')->middleware('auth');
Route::delete('/alunos/{id}', 'AlunosController@destroy')->name('alunos.destroy')->middleware('auth');
/////////////////////////////////////////////////////////////////////////////////////////////////////////
