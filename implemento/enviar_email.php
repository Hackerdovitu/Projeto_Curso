<html>
	<head>
		<meta charset="utf-8" />
    	<title>Recuperar Senha</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>

	<body>

		<div class="container" style="border: 1px solid black; border-radius: 30px; width: 700px; margin-top: 50px; padding: 40px;">  

			<div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="img.png" alt="" width="72" height="72">
				<h2>Recuperar Senha</h2>
				<p class="lead">Cadastre seu e-mail abaixo que será enviado sua senha para o mesmo!!</p>
			</div>

      		<div class="row d-flex justify-content-center">
	      		<div class="col-8">
	      			<div class="card-login">
	  					<div class="card">
	  				
							<div class="card-body font-weight-bold">
								<form action="recuperar_senha.php" method="post">
									<div class="form-group">
										<label class="d-flex justify-content-center">Email de recuperação de senha:</label>
										<input name="email" type="email" class="form-control" id="para" placeholder="user@dominio.com.br">
									</div>
									<button name='ok' type="submit" class="btn btn-dark btn-lg btn-block">Enviar Email</button>
								</form>
								<div class="d-flex justify-content-center">
									<a href="login.php" style="width: 150px;" type="btn" class="btn btn-dark btn-lg btn-block">Voltar</a></div>
							</div>

						</div>
							<?php
								if (isset($_GET['erro']) && $_GET['erro'] == 'email') {
									echo '<div class="alert alert-danger text-center mt-3" role="alert">Email não encontrado</div>';
								}

								if (isset($_GET['enviado']) && $_GET['enviado'] == 'true') {
									echo '<div class="alert alert-success text-center mt-3" role="alert">Email enviado com sucesso! Cheque seu Email</div>';
								}
							?>
					</div>
	      		</div>
      		</div>
      	</div>

	</body>
</html>