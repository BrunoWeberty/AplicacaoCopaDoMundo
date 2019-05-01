<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jogador;
use App\Posicao;
use App\Selecao;
use Storage;
use Illuminate\Support\Facades\DB;

class JogadoresController extends Controller
{
    //

    
    function index(Request $request){
    	if($request->get("id") == null){
    		$jogador = new Jogador();
    	}else {
    		$jogador = Jogador::Where('id', $request->get("id"))->first();//Chamando metodo statico chamado where semelhante ao select, fazendo busca no banco, onde request traz o resultado do banco, o first garante que pega da colection somente primeiro objeto semelhante limite 1

    	}
    	return view('jogadores.cadastro', array('jogador' => $jogador, 
        'posicoes' => Posicao::All(), 'selecoes' => Selecao::All()));//como chamar um arquivo dentro de uma pasta
        //categorias é o objeto, categoria nome da classe
    }

    function listar(){
    	//return view('jogadores.lista', 
    	//array('jogadores'=> Jogador::All()));//como chamar um arquivo dentro de uma pasta
    	//nao precisa da chamada da pasta app pq ja foi chamada
        $selecao  = DB::table('jogadors')
            ->join('selecaos', 'jogadors.selecao', '=', 'selecaos.id')
            ->join('posicaos', 'jogadors.posicao', '=', 'posicaos.id')
            ->select('jogadors.*', 'selecaos.arquivo', 'posicaos.descricao')->orderBy('jogadors.nome')
            ->get();

        return view('jogadores.lista', array('jogadores' => $selecao));
    }

    function salvar(Request $request){//Framework de requisição http
    //var_dump($request->all());//Serve para mostrar os arquivo enviados pelo submit
    if($request->get('id') == null){
        $jogador = new Jogador();
    }else{
        $jogador = Jogador::Where('id', $request->get('id'))->first();
        // SELECT * FROM chamado WHERE id = $_GET['id'] LIMIT 1
    }

    $jogador->nome = $request->get('nome');//pegando os valores e colocando dentro do objetos
    $jogador->dataN = $request->get('data');
    $jogador->clube = $request->get('clube');
    $jogador->posicao = $request->get('posicao');
    $jogador->selecao = $request->get('selecao');

    if ($request->get('check') == 1) {
            $jogador->check = 1;
        } else {
            $jogador->check = 0;
        }


    $jogador->save();//Salvando objeto

    return $this->listar();

    }

    function excluir(Request $request){

        if($request->get('id') != null){
            $jogador = Jogador::Where('id', $request->get('id'))->first();
            $jogador->delete();
            return $this->listar();
        }
    }
    
    function adquirir(Request $request) { // recebo a requisicao
        if ($request->get('id') != null) { // valido se eu tenho o campo ID na request
            $id = $request->get('id');  // crio e atribuo uma variavel ID
            Jogador::where('id', $id) // estou fazendo um UPDATE com a condição do WHERE do id igual a request que eu to recebo
            ->update(['check' => true]);  /// e atribuo a figura igual a 1 no campo 
            return redirect()->action('JogadoresController@listar');   // aqui eu somente redireciono para a view de listagem pra poder atualizar a pagina
        }
    }
}
