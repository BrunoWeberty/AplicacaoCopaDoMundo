@extends("layouts.master")

@section("conteudo")      
          <div class="row">
            <div class="col-sm-12"><!-- Container principal-->
                <form id="form" action="/posicao/salvar" method="post" class="valid rsform"><!-- Formulário-->

                  <input type="hidden" name="_token" value="{{ csrf_token() }}" /><!-- Mantem a sessão ativa, gerando um token novo sempre, a cada conexao-->

                  <div class="form-group row"><!-- Div do input do nome-->
                    <label for="descricao" class="col-sm-1 col-form-label">Descrição: </label>
                    <div class="col-sm-11">
                      <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite aqui a Posição do jogador" value="{{ $posicao->descricao }}" required="" />
                    </div>
                  </div>
                  <br/>

                  <input type="hidden" name="id" value="{{ $posicao->id }}" />

                  <div class="col-sm-1"><!-- Div do botao-->
                      <button type="submit" class="btn btn-primary btn-right">Salvar</button>
                  </div>                               

                </form>
            </div>

          </div>
@stop