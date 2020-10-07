<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Página de Login</title>
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
	              <li class="nav-item ">
	                <a href="login.php" accesskey="l" class="nav-link pag_atual" id="alinhamento"><span style="text-decoration: underline;">L</span>ogin</a>
	              </li>
	              <li class="nav-item navegacao">
	                <a href="registro.php" accesskey="r" class="nav-link" id="alinhamento"><span style="text-decoration: underline;">R</span>egistro</a>
	              </li>
	            </ul>
	          </div>
	        </div>
	      </nav>
	    </header>

	    <?php
			if (isset($_GET['registro']) && $_GET['registro'] == 'sucesso' ) {
		?>
		<div class="bg-success pt-2 text-white d-flex justify-content-center">
			<h6>Registro efetuado com sucesso, por favor entre em sua conta!</h6>
		</div>
		<?php } ?>
		<?php
			if (isset($_GET['login']) && $_GET['login'] == 'erro' ) {
		?>
		<div class="bg-danger pt-2 text-white d-flex justify-content-center">
			<h6>Dados inválidos!</h6>
		</div>
		<?php } ?>
		<?php
			if (isset($_GET['login']) && $_GET['login'] == 'erro2' ) {
		?>
		<div class="bg-danger pt-2 text-white d-flex justify-content-center">
			<h6>Realize login para acessar paginas de usuario!</h6>
		</div>
		<?php } ?>

	    <article class="container login">
	    	<div class="row">
	    		
	    	<div class="col-6">
	    		<div id="img_login">
	  		  		<img src="img/boas_vindas.png" style="width: 510px;">
	   			</div>	
	    	</div>
			
				<div class="rounded col-6" id="caixa_registro">
					<div class="row">
						<div class="col-12">
				    		<h3 style="text-align: center; font-size: 2.1em;">Faça login aqui!</h3> <hr>
						</div>
					</div>
			<form action="validar_login.php" method="POST">
					<div class="form-group">
					   	<label>Endereço de Email:</label>
					   	<input name="email" onblur="validar_email()" type="email" class="form-control" id="email_registro">
					  	<div id="aviso_campo_vazio" class=""></div>
					</div>

					<div class="form-group">
					   	<label>Senha:</label>
					   	<input name="senha" onblur="validar_senha()" type="password" class="form-control" id="senha_registro">
					   	<div id="aviso_campo_vazio02" class=""></div>
					</div>

					

					  <div class="form-group form-check">
					    <input type="checkbox" class="form-check-input">
					    <label class="form-check-label">Lembre-se de mim.</label>
						<a href="registro.php">Cadastre-se.</a> <br>
						<a href="enviar_email.php">Esqueci minha senha!</a>
					  </div>

					<button type="submit" class="btn btn-outline-dark">Entrar</button>

			</form>
				</div>
			
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