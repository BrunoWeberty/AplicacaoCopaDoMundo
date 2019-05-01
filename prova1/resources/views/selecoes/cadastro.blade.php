@extends("layouts.master")

@section("conteudo")      
          <div class="row">
            <div class="col-sm-12"><!-- Container principal-->
                <form id="form" action="/selecao/salvar" method="post" class="valid rsform" enctype="multipart/form-data"><!-- Formulário-->

                  <input type="hidden" name="_token" value="{{ csrf_token() }}" /><!-- Mantem a sessão ativa, gerando um token novo sempre, a cada conexao-->

                  <div class="form-group row"><!-- Div do input do nome-->
                    <label for="nome" class="col-sm-1 col-form-label">Nome: </label>
                    <div class="col-sm-11">
                      <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite aqui o Nome da Seleção" value="{{ $selecao->nome }}" required="" />
                    </div>
                  </div>
                  <br/>

                  <div class="form-group row"><!-- Div do file, enviar arquivo-->
                    <label for="file" class="col-sm-1 col-form-label">Bandeira:</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control-file" name="arquivo" id="arquivo" required="" />
                    </div>

                    <input type="hidden" name="id" value="{{ $selecao->id }}" />

                    <div class="col-sm-1"><!-- Div do botao-->
                        <button type="submit" class="btn btn-primary btn-right">Salvar</button>
                    </div>
                  </div>                               

                </form>
            </div>

          </div>
@stop