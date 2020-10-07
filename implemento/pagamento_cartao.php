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
	          <a href="pag01.html" class="nav-brand">
	            <img src="img/logo branco no preto.png" id="logo">
	          </a>

	          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
	            <span class="navbar-toggler-icon"></span>
	          </button>

	          <div class="collapse navbar-collapse" id="nav-principal">
	            <ul class="navbar-nav ml-auto"> 
	              <li class="nav-item navegacao">
	                <a href="pag01.html" accesskey="i" class="nav-link" id="alinhamento"><span style="text-decoration: underline;">I</span>nicio</a>
	              </li>
	              <li class="nav-item navegacao">
	                <a href="pag02.html" accesskey="s" class="nav-link" id="alinhamento"><span style="text-decoration: underline;">S</span>obre</a>
	              </li>
	              <li class="nav-item">
	                <a href="vendas.html" accesskey="p" class="nav-link pag_atual" id="alinhamento"><span style="text-decoration: underline;">P</span>roduto</a>
	              </li>
	              <li class="nav-item navegacao">
	                <a href="contato.html" accesskey="c" class="nav-link" id="alinhamento"><span style="text-decoration: underline;">C</span>ontato</a>
	              </li>
	              <li class="nav-item navegacao">
	                <a href="login.html" accesskey="l" class="nav-link" id="alinhamento"><span style="text-decoration: underline;">L</span>ogin</a>
	              </li>
	              <li class="nav-item navegacao">
	                <a href="registro.html" accesskey="r" class="nav-link" id="alinhamento"><span style="text-decoration: underline;">R</span>egistro</a>
	              </li>
	            </ul>
	          </div>
	        </div>
	      </nav>
	    </header>

		<article class="container">
			<div id="conteudo_produto">
				<p class="h2" style="text-align: center; color: black;">Pagamento por Cartão</p>
			</div>

			<hr>

			<div class="row">
				<div class="col-3">
					<img src="img/img_indisponivel.png" style="height: 248px;width: 269px;">
				</div>

				<div class="col-8" style="padding-left: 20px;">
					<h4> Informe os dados do cartão</h4>
					<form>
					  <div class="form-group">
					    <label for="inputNumeroCartao">Número do Cartão:</label>
					    <input onkeypress="return onlynumber();" onblur="validar_ncartao()" type="text" maxlength="16" class="form-control" id="inputNumeroCartao" placeholder="xxxx-xxxx-xxxx-xxxx">
					    <div id="aviso_ncartao"></div>
					  </div>

					<div class="form-row">
					  <div class="form-group col-md-2">
					    <label>CVV:</label>
					    <input type="text" onkeypress="return onlynumber();" onblur="validar_cvv()" class="form-control" maxlength="3" id="inputCVV" placeholder="xxx">
					    <div id="aviso_cvv"></div>
					  </div>

					  <div class="form-group col-md-4">
					    <label for="inputValidade">Validade do cartão:</label>
					    <input onkeypress="return onlynumber();" onblur="validar_validade()" type="text" class="form-control" maxlength="4" id="inputValidade" placeholder="xx / xx" >
					  	<div id="aviso_validade"></div>
					  </div>
					</div>

					  <button type="submit" class="btn btn-dark">Enviar</button>
					</form>
				</div>
			</div>

			<hr>
			
			<div class="row">
				<p class="lead" style="font-size: 1.15em;">
				<form>
				  </div>
				  <div class="form-group">
				    <label for="inputAddress">Bairro</label>
				    <input type="text" class="form-control" id="inputAddress" placeholder="Benedito Bentes">
				  </div>
				  <div class="form-group">
				    <label for="inputAddress2">Complemento</label>
				    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, Condominio, Casa, etc.">
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-4">
				      <label for="inputCIDADE">Cidade</label>
				      <input type="text" class="form-control" id="inputCIDADE" placeholder="Maceió">
				    </div>
				    <div class="form-group col-md-2">
				      <label for="inputNUMERO">Número</label>
				      <input type="number" class="form-control" id="inputNUMERO" placeholder="475">
				    </div>
				    <div class="form-group col-md-4">
				      <label for="inputESTADO">Estado</label>
				      <select id="inputESTADO" class="form-control">
				        <option selected>Selecione...</option>
				        <option>AC</option>
				        <option>AL</option>
				        <option>AP</option>
				        <option>AM</option>
				        <option>BA</option>
				        <option>CE</option>
				        <option>DF</option>
				        <option>ES</option>
				        <option>GO</option>
				        <option>MA</option>
				        <option>MT</option>
				        <option>MS</option>
				        <option>MG</option>
				        <option>PA</option>
				        <option>PB</option>
				        <option>PR</option>
				        <option>PE</option>
				        <option>PI</option>
				        <option>RJ</option>
				        <option>RN</option>
				        <option>RS</option>
				        <option>RO</option>
				        <option>RR</option>
				        <option>SC</option>
				        <option>SP</option>
				        <option>SE</option>
				        <option>TO</option>
				      </select>
				    </div>
				    <div class="form-group col-md-2">
				      <label for="inputCEP">CEP</label>
				      <input type="text" class="form-control" id="inputCEP">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="form-check">
				      <input class="form-check-input" type="checkbox" id="gridCheck">
				      <label class="form-check-label" for="gridCheck">
				        Salvar este endereço.
				      </label>
				    </div>
				  </div>
				  <button type="submit" class="btn btn-dark">Enviar</button>
				</form>
				</p>
			</div>
		</article>

		<footer id="rodape">
        © Todos os direitos reservados
    	</footer>











		<script src="js/interacao.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>