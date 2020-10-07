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
	              <li class="nav-item ">
	                <a href="index.php" accesskey="i" class="nav-link pag_atual" id="alinhamento"><span style="text-decoration: underline;">I</span>nicio</a>
	              </li>
	              <li class="nav-item">
                  <a href="pag02.php" accesskey="s" class="nav-link" id="alinhamento"><span style="text-decoration: underline;">S</span>obre</a>
                </li>
                <li class="nav-item navegacao">
                  <a href="vendas.php" accesskey="p" class="nav-link" id="alinhamento"><span style="text-decoration: underline;">P</span>roduto</a>
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

		<div id="problematica" class="caixa1">
			<div class="conteudo-titulo">
				<span class="titulo">
					Limpeza de Vagões
				</span>
			</div>
			<div class="navbar-collapse fixed-bottom" id="nav-principal">
				<li class="nav-item aba-flutuante01">
	            	<a href="#problematica" class="nav-link" id="alinhamento">Problemática</a>
	            </li>
	            <li class="nav-item aba-flutuante02">
	            	<a href="#solucao" class="nav-link" id="alinhamento">Solução</a>
	            </li>
            </div>
		</div>

		<div class="conteudo">
			<h3>Problemática</h3>
			<p>
				O transporte de matérias primas como minério de ferro e carvão mineral em vagões de transporte é um meio bastante viável para a produção do aço, porém devido à umidade ou até mesmo em períodos de chuva ocorre o agarramento desses materiais no fundo do vagão fazendo com que o mesmo esteja sujeito a uma limpeza manual a qual expõe o funcionário a riscos ergonômicos. <a href="pag02.php">Leia Mais...</a>
			</p>
		</div>
<!-- --------------------------------------------------------------------- -->

		<div id="solucao" class="caixa2">
			<div class="conteudo-titulo">
				<span class="titulo">
					Proposta
				</span>
			</div>
		</div>

		<div class="conteudo">
			<h3>Solução Prosposta <span class="text-lowercase" style="font-size: 10px; color: grey;">(possivel mudança)</span></h3>
			<p>
				A solução para esse problema seria algo para facilitar a limpeza que a demanda está pedindo, com isso, Projeto Magnetic Blanket teve a proposta de fazer uma manta magnética onde o acúmulo de minerais, carvão mineral e outros resíduos que são transportados pelos vagões possam grudar na manta, facilitando o trabalho do funcionário. <a href="pag02.php">Leia Mais...</a>
				
			</p>
		</div>

		<footer id="rodape">
        © Todos os direitos reservados
    	</footer>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>