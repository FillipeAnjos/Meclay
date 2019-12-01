<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

/*
	Route::get('/', function () {
    	return view('index');
	});
*/
Route::get('/', 'TrocaPageController@index')->name('index');
Route::get('/index', 'TrocaPageController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* Rotas responsaveis pelas rotas do menu superior */
Route::group(['prefix' => 'menu'], function (){
     Route::get('contato', ['uses' => 'TrocaPageController@contato']);
     Route::get('servicos', ['uses' => 'TrocaPageController@servicos']);
     Route::get('nossaHistoria', ['uses' => 'TrocaPageController@nossaHistoria']);
     Route::get('filiado', ['uses' => 'TrocaPageController@filiado']);
                       
});

Route::post('/orcamentoRapido', 'OrcamentoRapidoController@orcamentoRapido')->name('orcamentoRapido');





/*

	https://www.reformasbrasil.com/
	http://www.prismaempreiteira.com.br/
	https://londriobras.com.br/

	http://www.lotuspredial.com.br/contato

*/

/* 
	TEMPLATES DE GRAÇA HTML

	https://www.free-css.com/free-css-templates

*/

















/* 

Route::group(['prefix' => 'oracoes'], function (){
     Route::get('paiNosso', ['uses' => 'OracaoController@oracaoPaiNosso']);
     Route::get('saoBento', ['uses' => 'OracaoController@oracaoSaoBento']);
     Route::get('credo', ['uses' => 'OracaoController@oracaoCredo']);
     Route::get('aveMaria', ['uses' => 'OracaoController@oracaoAveMaria']);
     Route::get('saoJorge', ['uses' => 'OracaoController@oracaoSaoJorge']);
     Route::get('nossaSenhora', ['uses' => 'OracaoController@oracaoNossaSenhora']);
                  
});

*/