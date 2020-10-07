<?php
require ("verificar_autenticacao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head> 
		<meta charset="UTF-8">
		<title>Magnetic Blanket</title>
		<link rel="stylesheet" href="css/paralax.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   		<script src="https://kit.fontawesome.com/5079567911.js" crossorigin="anonymous"></script>
    	<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<header>
	      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	        <div class="container">
	          <a href="index.php" class="nav-brand">
	            <img src="img/logo branco no preto.png" id="logo">
	          </a>

	          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
	            <span class="navbar-toggler-icon"></span>
	          </button>

	          <div class="collapse navbar-collapse" id="nav-principal">
	            <ul class="navbar-nav ml-auto"> 
	              <li class="nav-item navegacao">
	                <a href="pag01.php" accesskey="i" class="nav-link" id="alinhamento"><span style="text-decoration: underline;">I</span>nicio</a>
	              </li>
	              <li class="nav-item navegacao">
	                <a href="pag02.php" accesskey="s" class="nav-link" id="alinhamento"><span style="text-decoration: underline;">S</span>obre</a>
	              </li>
	              <li class="nav-item">
	                <a href="vendas.php" accesskey="p" class="nav-link pag_atual" id="alinhamento"><span style="text-decoration: underline;">P</span>roduto</a>
	              </li>
	              <li class="nav-item navegacao">
	                <a href="contato.php" accesskey="c" class="nav-link" id="alinhamento"><span style="text-decoration: underline;">C</span>ontato</a>
	              </li>
	              <li class="nav-item navegacao">
                  <a href="sair.php" class="nav-link" id="alinhamento">Sair</a>
                </li>
	            </ul>
	          </div>
	        </div>
	      </nav>
	    </header>

		<article class="container">
			<div id="conteudo_produto">
				<p class="h2" style="text-align: center; color: black;">Produto Solução</p>
			</div>

			<hr>

			<div class="row">
				<div class="col-3">
					<img src="img/img_indisponivel.png" style="height: 248px;width: 269px;">
				</div>

				<div class="col-8">
					<div class="row" >
						<div class="col-8">
							<p class="h4 text-uppercase titulo-tema" style="padding-top: 15px;">Manta Magnética</p>

							<h6 style="color: green;"> Em estoque </h6>
							
							<h6> Selecione a quantidade: </h6>
							
							<select class="form-control" id="qtd_produto">
							    <option>1</option>
							    <option>2</option>
							    <option>3</option>
							    <option>4</option>
							    <option>5</option>
							</select>
						</div>

						<div class="col-4">
							<p id="preco_produto" class="font-weight-bold h5"> R$ XX,XX </p>

							<div id="area_forma_pagamento">
								<h6> Selecione a forma de pagamento para continuar:</h6>
								<br>
								<a class="btn btn-dark" href="pagamento_cartao.html" role="button" style="display: block;">Cartão de Crédito / Débito</a>
								<br>
								<button onclick="boleto()" class="btn btn-dark btn-block">
									Boleto
								</button>

							</div>
						</div>
					</div>
				</div>
			</div>

			<hr>
			
			<div class="row">
				<p class="lead" style="font-size: 1.15em;">
					O Car dumper é um processo mecânico, que efetua o despejo de materiais dos vagões, sendo que neste mesmo processo ao girar para realocação da carga a outro depósito, ainda restam materiais ao fundo do mesmo. Neste caso, o desenvolvimento do Magnetic Blanket utiliza como material uma manta reutilizável, que possibilita recolher os recursos que lá residem, trazendo a diminuição de prejuízos e favorecendo a limpeza.
				</p>
			</div>
		</article>

		<footer id="rodape">
        © Todos os direitos reservados
    	</footer>












		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>