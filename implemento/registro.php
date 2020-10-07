<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Página de Registro</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   		<script src="https://kit.fontawesome.com/5079567911.js" crossorigin="anonymous"></script>
    	<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body id="home_contato">
		<header>
	      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	        <div class="container">
	          <a href="pag01.php" class="nav-brand">
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
	                <a href="login.php" accesskey="l" class="nav-link" id="alinhamento"><span style="text-decoration: underline;">L</span>ogin</a>
	              </li>
	              <li class="nav-item">
	                <a href="registro.php" accesskey="r" class="nav-link pag_atual" id="alinhamento"><span style="text-decoration: underline;">R</span>egistro</a>
	              </li>
	            </ul>
	          </div>
	        </div>
	      </nav>
	    </header>

	    <?php
			if (isset($_GET['email']) && $_GET['email'] == 'invalido' ) {
		?>
		<div class="bg-danger pt-2 text-white d-flex justify-content-center">
			<h6>O email que você está tentando cadastrar já foi cadastrado!</h6>
		</div>
		<?php } ?>

	    <article class="container">
	    	<div class="rounded" id="caixa_registro">
	    		<div class="row">
					<div class="col-12">
			    		<h3 style="text-align: center; font-size: 2.1em;"> Resgistre-se Aqui!</h3> <hr>
					</div>
				</div>
				<form action="realizar_cadastro.php" method="POST">
					<div class="form-group">
				    	<label>Nome:</label>
				    	<input name="nome" onblur="validar_nome()" type="name" class="form-control" id="nome_registro">
				    	<div id="aviso_campo_vazio00" class=""></div>
				  	</div>

					<div class="form-group">
				    	<label for="exampleInputEmail1">Endereço de Email:</label>
				    	<input name="email" onblur="validar_email()" type="email" class="form-control" id="email_registro" aria-describedby="emailHelp">
				    	<div id="aviso_campo_vazio" class=""></div>
				  	</div>

				  	<div class="form-group">
				    	<label for="exampleInputPassword1">Senha:</label>
				    	<input name="senha" onblur="validar_senha()" type="password" class="form-control" id="senha_registro">
				    	<div id="aviso_campo_vazio02" class=""></div>
				    	<label for="exampleInputPassword1">Confirme sua senha:</label>
				    	<input name="confirmarSenha" onblur="validar_confirmarSenha()" type="password" class="form-control" id="confirmarSenha_registro">
				    	<div id="aviso_campo_vazio03" class=""></div>
				    	<?php
				    		if (isset($_GET['senhas']) && $_GET['senhas'] = 'diferente') {
				    	?>
				    	<div>
				    		<p class="text-danger">As senhas inseridas estão diferentes!</p>
				    	</div>
				    	<?php } ?>
					</div>

				  <!-- <div class="form-group form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Lembre-se de mim.</label>
				  </div> -->

				  <button type="submit" class="btn btn-outline-dark">Cadastrar</button>
				</form>
	    	</div>
	    </article>
	   
	    <footer id="rodape_contato">
        	© Todos os direitos reservados
    	</footer>


















    <script src="js/interacao.js"></script>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>