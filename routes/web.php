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
Route::resource('questionario', 'QuestionarioController');
Route::get('questionario','QuestionarioController@index')->name('questionario');

Route::get('/import', 'CoordenadorController@importView')->middleware('is_admin') 
    ->name('admin');

Route::post('/importAluno', 'CoordenadorController@alunoImport')->name('importAluno');
Route::post('/importHorario', 'CoordenadorController@horarioImport')->name('importHorario');
Route::post('/importPergunta', 'CoordenadorController@perguntaImport')->name('importPergunta');

//Route::view('/', 'welcome');
//Auth::routes();
//Route::get('/home', 'HomeController@index')    
//    ->name('home');
//Route::get('/admin', 'AdminController@admin')    
//    ->middleware('is_admin')    
//    ->name('admin');