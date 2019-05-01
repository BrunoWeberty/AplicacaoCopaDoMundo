<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posicao;

class PosicoesController extends Controller
{
    function index(Request $request){
    	if($request->get('id') == null){
    		$posicao = new Posicao();
    	} else {
    		$posicao = Posicao::Where('id', $request->get('id'))->first();
    	}
    	//posicoes.cadastro: nome da view, vai estar em Resources\viewa\categorias.blade.php
    	//'posicao' é o nome do objeto que será acessado na view
    	// $posicao é o ojbeto passado do controller pra view
    	return view('posicoes.cadastro', array('posicao' => $posicao));
    }

    function salvar(Request $request) {
    	if($request->get('id') == null){
    		$posicao = new Posicao();
    	}else {
    		$posicao = Posicao::Where('id', $request->get('id'))->first();
    	}
    	//Atribuição de todos os parametros
    	$posicao->descricao = $request->get('descricao');
    	//Persite os dados
    	$posicao->save();
    	//Redireciona para a lista
    	return redirect("posicao/lista");
    }

    function excluir(Request $request){
    	if($request->get('id') != null){
    		//Destroy semelhante ao delete, mas exclui pela chave primaria
    		Posicao::destroy($request->get('id'));
    	}
    	return redirect("posicao/lista");
    }

    function lista(){
    	//posicoes.lista é a view em Resources\Views\posicoes\lista.blade.php
    	// 'posicoes' é o nome a ser acessado no view
    	//Posicao::All() é um metodo estatico da Model que retorna uma lista com todos os elementos da Model
    	return view('posicoes.lista', array('posicoes' => Posicao::All()));
    }
}
