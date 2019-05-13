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
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/questionario', 'QuestionarioController');

Route::get('/exportAluno', 'MyController@export')->name('export');
Route::get('/importExportViewAluno', 'CoordenadorController@importExportView');
Route::post('/importAluno', 'CoordenadorController@import')->name('import');


Route::get('/exportProfessor', 'CoordenadorController@export')->name('export');
Route::get('/importExportViewProfessor', 'CoordenadorController@Professorimportview');
Route::post('/importProfessor', 'CoordenadorController@Professorimport')->name('import');
