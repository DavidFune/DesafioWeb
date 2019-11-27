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

Route::get('/orcamento/remove/{id}', 'OrcamentoController@remover')->name('orcamento.remove');
Route::get('/orcamentos/filter', 'OrcamentoController@filter')->name('orcamentos.filter');
Route::resource('orcamento', 'OrcamentoController');
