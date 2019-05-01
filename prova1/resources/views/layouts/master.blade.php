<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Album da Copa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- JQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
			<header></header>
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<ul class="nav navbar-nav">
						<li><a href="/">Home</a></li>
						<li><a href="/jogador">Jogador</a></li>
						<li><a href="/jogador/listar">Listagem de Jogadores</a></li>
						<li><a href="/posicao">Posição</a></li>
						<li><a href="/posicao/lista">Listagem de Posições</a></li>
						<li><a href="/selecao">Seleção</a></li>
						<li><a href="/selecao/lista">Listagem de Seleções</a></li>
					</ul>
				</div>
			</nav>
			<section>
				@yield("conteudo")
			</section>
			<footer></footer>			
        </div>
    </body>
</html>