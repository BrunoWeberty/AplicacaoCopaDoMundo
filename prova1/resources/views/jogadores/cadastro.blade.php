@extends("layouts.master")

@section("conteudo")      
          <script type="text/javascript">
            
            function verificar()
            {

               var a = document.getElementById('check').value;
               
                    alert("Check ="+a);
               
               

            }

        </script>

          <div class="row">
            <div class="col-sm-12"><!-- Container principal-->
                <form id="form" action="/jogador/salvar" method="post" class="valid rsform" enctype="multipart/form-data"><!-- Formulário-->

                  <input type="hidden" name="_token" value="{{ csrf_token() }}" /><!-- Mantem a sessão ativa, gerando um token novo sempre, a cada conexao-->

                  <div class="form-group row"><!-- Div do input do nome-->
                    <label for="nome" class="col-sm-1 col-form-label">Nome: </label>
                    <div class="col-sm-11">
                      <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite aqui nome do jogador" value="{{ $jogador->nome }}" required="" />
                    </div>
                  </div>
                  <br/>                 

                  <div class="form-group row"><!-- Div da data-->
                    <label for="data" class="col-sm-3 col-form-label">Data de Nascimento:</label>
                    <div class="col-sm-3">
                      <input type="date" class="form-control" id="data" name="data" value="{{ $jogador->dataN }}" required="" />
                    </div>
                  </div>
                  <br/>  

                  <div class="form-group row"><!-- Div do input do nome-->
                    <label for="clube" class="col-sm-1 col-form-label">Clube: </label>
                    <div class="col-sm-11">
                      <input type="text" class="form-control" id="clube" name="clube" placeholder="Digite aqui clube do jogador" value="{{ $jogador->clube }}" required="" />
                    </div>
                  </div>
                  <br/>   

                  <div class="form-group row"><!-- Div do Select to tipo-->
                    <label for="selecao" class="col-sm-1 col-form-label">Seleção: </label>
                    <div class="col-sm-11">
                      <select class="form-control" id="selecao" name="selecao" required="" >
                        <option></option>
                        @foreach($selecoes as $row)
                          @if($row->id == $jogador->selecao)
                          <option value="{{ $row->id }}" selected="selected">{{ $row->nome }}</option>
                        @else
                          <option value="{{ $row->id }}">{{ $row->nome }}</option>
                        @endif
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <br/>

                  <div class="form-group row"><!-- Div do Select to tipo-->
                    <label for="posicao" class="col-sm-1 col-form-label">Posição: </label>
                    <div class="col-sm-11">
                      <select class="form-control" id="posicao" name="posicao" required="" >
                        <option></option>
                        @foreach($posicoes as $row)
                          @if($row->id == $jogador->posicao)
                          <option value="{{ $row->id }}" selected="selected">{{ $row->descricao }}</option>
                        @else
                          <option value="{{ $row->id }}">{{ $row->descricao }}</option>
                        @endif
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <br/>       


                  <div class="form-group"><!-- Div do Select to tipo-->
                      <div class="checkbox">
                        <label for="check" class="col-sm-11 col-form-label"><input type="checkbox" id="check" name="check" value="1">O jogador  possui figurinha da sua seleção</label>
                      </div>
                  </div>
                  <br/><br/>      

                    <input type="hidden" name="id" value="{{ $jogador->id }}" />

                    <div class="col-sm-1 row"><!-- Div do botao-->
                        <button type="submit" class="btn btn-primary btn-right" onclick="verificar">Salvar</button>
                    </div>
                  </div>                

                </form>
                
          </div>

@stop