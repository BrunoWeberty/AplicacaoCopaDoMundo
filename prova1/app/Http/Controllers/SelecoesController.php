<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Selecao;
use Storage;

class SelecoesController extends Controller
{
    function index(Request $request){
    	if($request->get('id') == null){
    		$selecao = new Selecao();
    	} else {
    		$selecao = Selecao::Where('id', $request->get('id'))->first();
    	}
    	//posicoes.cadastro: nome da view, vai estar em Resources\viewa\categorias.blade.php
    	//'posicao' é o nome do objeto que será acessado na view
    	// $posicao é o ojbeto passado do controller pra view
    	return view('selecoes.cadastro', array('selecao' => $selecao));
    }

    function salvar(Request $request) {
    	if($request->get('id') == null){
    		$selecao = new Selecao();
    	}else {
    		$selecao = Selecao::Where('id', $request->get('id'))->first();
    	}
    	//Atribuição de todos os parametros
    	$selecao->nome = $request->get('nome');

    	if($request->hasFile('arquivo')){//getClientOriginalName pega o nome do upload para colocar no objet que sera persistido no banco
        $selecao->arquivo = $request->file('arquivo')->getClientOriginalName();
        //storeAs recebe 3 parametros: 
        //1. nome a ser salvo(mesmo nome do objeto),
        //2.pasta a salvar(null salvar direto na raiz),
        //3. disco(usaremos o public)
        $request->file('arquivo')->storeAs($selecao->arquivo, null, 'public');//Salva o arquivo dentro da pasta storage

        }else{
            $selecao->arquivo = null;//Se não tiver arquivo ele seta null no banco
        }

    	//Persite os dados
    	$selecao->save();
    	//Redireciona para a lista
    	return $this->lista();
    }

    function excluir(Request $request){
    	if($request->get('id') != null){
    		//Destroy semelhante ao delete, mas exclui pela chave primaria
    		Selecao::destroy($request->get('id'));
    	}
    	return $this->lista();
    }

    function lista(){
    	//posicoes.lista é a view em Resources\Views\posicoes\lista.blade.php
    	// 'posicoes' é o nome a ser acessado no view
    	//Posicao::All() é um metodo estatico da Model que retorna uma lista com todos os elementos da Model

    	return view('selecoes.lista', array('selecoes' => Selecao::orderBy('selecaos.nome')->get()));
    }


}
