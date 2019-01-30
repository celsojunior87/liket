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

Route::group(['namespace' =>'Escola','middleware'=>'auth'] ,function (){

    Route::resource('/turma','TurmaController');
    Route::resource('/alunos','AlunosController');
    Route::resource('/professor','ProfessoresController');



});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
