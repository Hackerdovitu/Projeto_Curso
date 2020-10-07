<?php
require ("verificar_autenticacao.php");
?>
<?php  

    $chamados = array();

    $arquivo = fopen('chamados.txt', 'r');

    while (!feof($arquivo)) {

      // echo fgets($arquivo).'<br>';
      $chamados[] = fgets($arquivo);
    }

    fclose($arquivo);
 /*   echo "<pre>";
    print_r($chamados);
    echo "</pre>";*/

 ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Página Contato</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   		<script src="https://kit.fontawesome.com/5079567911.js" crossorigin="anonymous"></script>
    	<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body id="home_contato">
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
	              <li class="nav-item navegacao">
                  <a href="vendas.php" accesskey="p" class="nav-link" id="alinhamento"><span style="text-decoration: underline;">P</span>roduto</a>
                </li>
	              <li class="nav-item">
	                <a href="#" accesskey="c" class="nav-link pag_atual" id="alinhamento"><span style="text-decoration: underline;">C</span>ontato</a>
	              </li>
	              <li class="nav-item navegacao">
                  <a href="sair.php" class="nav-link" id="alinhamento">Sair</a>
                </li>
	            </ul>
	          </div>
	        </div>
	      </nav>
	    </header>
		
		<div class="container">
			<div class="rounded caixa_contato">
				<div class="row">
					<div class="col-12">
			    		<h3 style="text-align: center; font-size: 2.1em;">Contate-nos: </h3> <hr>
					</div>
				</div>
				<div class="row">
		    		<div id="contato" class="col-6">
			    		<div class="form-group">
				    		<label class="h5">Endereço de Email: <span class="font-weight-normal">magneticblanket@gmail.com</span></label> <br> 
				    		<label class="h5">Telefone: <span class="font-weight-normal">4002-8922</span></label> <br> <hr>
			    		</div>
		    			<form action="salvar_comentario.php" method="post">
						<div class="form-group">
							<label class="h5" for="exampleInputEmail1">Nome:</label>
							<input name="nome" type="text" class="form-control" id="nome_comentario">
						  	<p id="campo_vazio_01"></p>
						</div>			  
						<div class="form-group">
					    	<label for="exampleFormControlTextarea1" class="h5"> Envie um comentário:</label>
					    	<textarea name="txt_comentario" class="form-control" id="comentario" rows="3"></textarea>
					  		<p id="campo_vazio_02"></p>
					  	</div>
			    
			    		<button class="btn btn-outline-dark">Enviar</button>  
			    		</form>			
		    		</div>
					<div id="area_comentario" class="col-6">
						<h4>Comentários:</h4>
						<div id="comentarios">
							<?php  foreach($chamados as $valor) { 
							      $chamados_valor = explode('*', $valor);

							      if ( $_SESSION['perfil_u'] == 2 && $_SESSION['id_u'] != $chamados_valor[0] ) {
							        continue;
							      }

							      if ( count($chamados_valor) < 3) {
							        continue;
							      }
							      
							  ?>

							  <div class="card mb-3 bg-light">
							    <div class="card-body">
							      <h5 class="card-title"><?= $chamados_valor[1];  ?></h5>
							      <h6 class="card-subtitle mb-2 text-muted"><?= $chamados_valor[2]  ?></h6>

							    </div>
							  </div>

							<?php } ?>
						</div>
					</div>
	    		</div>
			</div>
		</div>
	   
	    <footer id="rodape_contato">
        	© Todos os direitos reservados
    	</footer>


















    <script src="js/interacao.js"></script>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>