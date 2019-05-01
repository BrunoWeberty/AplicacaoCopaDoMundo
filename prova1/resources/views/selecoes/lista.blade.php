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
                 <th>Bandeira</th>
                 <th>Editar</th>
                 <th>Excluir</th>
               </tr>
             </thead>
             <tbody>
               @foreach($selecoes as $row)
               		<tr>
               			<td>{{ $row->nome }}</td>
                    <td><img width="100px" src="http://localhost/prova1/storage/app/public/{{$row->arquivo}}"/></td>
                    <td>
                      <a href="/selecao?id={{$row->id }}">Editar</a>
                    </td>
                    <td>
                      <a onclick="return confirm('Deseja realmente excluir?');" href="/selecao/excluir?id={{ $row->id }}">Excluir</a>
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