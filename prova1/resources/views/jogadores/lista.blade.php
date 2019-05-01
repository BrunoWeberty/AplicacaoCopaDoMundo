@extends("layouts.master")

@section("conteudo")
  <div class="container">

       <div class="page-header">
        <CENTER><h1>Listagem</h1></CENTER>        
       </div>


         <div>
           <table id="table_id" class="table table-striped table-bordered table-hover table-bordered">
            <!--1-Coloca cores alternadas de linhas-->
            <!--2-Coloca bordas envolta da tabela-->
            <!--3-Coloca efeito hover nas linhas-->
            <!--4-Condensa os espacos dentro da tabela-->
             <thead>
               <tr>
                 <th>Nome</th>
                 <th>Data de Nascimento</th>
                 <th>Clube</th>
                 <th>Posição</th>
                 <th>Seleção</th>
                 <th>Editar</th>
                 <th>Excluir</th>
                 <th>Figurinha</th>
               </tr>
             </thead>
             <tbody>
               @foreach($jogadores as $row)
               		<tr>
               			<td>{{ $row->nome }}</td>
                    <td>{{ $row->dataN }}</td>
                    <td>{{ $row->clube }}</td>
                    <td>{{ $row->descricao }}</td>
                    <td><img width="100px" src="http://localhost/prova1/storage/app/public/{{$row->arquivo}}"/></td>

                    <td>
                      <a href="/jogador?id={{$row->id }}"><span class="glyphicon glyphicon-edit"></span> Editar</a>
                    </td>
                    <td>
                      <a onclick="return confirm('Deseja realmente excluir?');" href="/jogador/excluir?id={{ $row->id }}"><span class="glyphicon glyphicon-remove-sign">Excluir</span></a>
                    </td>
                    <td>
                      <?php
                        if($row->check == 1){
                            echo "Existe Figurinha";
                        }else{
                             echo "<a class='' href='/jogador/adquirir/?id=".$row->id."'>Adquirir</a>";
                        }
                        ?>
                    </td>
               		</tr>
               @endforeach
             </tbody>

           </table>

           
         </div>

     </div> 

    <script type="text/javascript">
      $(document).ready( function () { $('#table_id').DataTable(); } );
    </script>

@stop