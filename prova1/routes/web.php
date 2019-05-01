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
//Posição
Route::get('/posicao/lista',
'PosicoesController@lista');

Route::post('/posicao/salvar',
'PosicoesController@salvar');

Route::get('posicao/excluir',
'PosicoesController@excluir');

Route::get('posicao',
'PosicoesController@index');

//Seleção
Route::get('/selecao/lista',
'SelecoesController@lista');

Route::post('/selecao/salvar',
'SelecoesController@salvar');

Route::get('selecao/excluir',
'SelecoesController@excluir');

Route::get('selecao',
'SelecoesController@index');

//jogador
Route::get('/jogador/listar',
'JogadoresController@listar');

Route::post('/jogador/salvar',
'JogadoresController@salvar');

Route::get('jogador/excluir',
'JogadoresController@excluir');

Route::get('jogador',
'JogadoresController@index');

Route::get('/jogador/adquirir',
'JogadoresController@adquirir');



