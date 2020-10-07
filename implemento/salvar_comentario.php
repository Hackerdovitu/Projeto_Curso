

<!-- Codigos Abaixo Retirados do Projeto Trabalhado em Sala -->
<!-- Esses codigos serão reformulados e trabalhados para se encaixar na aplicação do site Magnetic Blanket -->
<!-- Abaixo estão codigos de duas outras paginas "abrir_chamado.php"/"registe_msg.php" -->
<!-- Quando for realizado os comentarios, eles serão encaminhados para uma nova pagina, de nome "registe_msg.php", onde serão armazenas e salvas em um arquivo  -->
<!-- Esse arquivo so será aberto com a função "fopen", onde serão salvas e podendo ser vistas em outra pagina -->
<!-- <?php  require("verificar_autenticacao.php"); ?> -->
<?php 
	
	session_start();

	//tratamento dos dados com o $_POST
	$conteudo = $_SESSION['id_u'].'*'.implode('*', $_POST).PHP_EOL;

	//Abrir arquiuvo com indicação que deseja realizar
	//ação =procurar na documentação = php.net
	//guarda a referencia do arquivo aberto na variavel $arquivo = codigo do arquivo aberto; 
	$arquivo = fopen('chamados.txt' , 'a');

	//identifica o arquivo aberto que deseja escrever e escreve o que quer por
	fwrite($arquivo, $conteudo);

	//fecha o arquivo aberto, com base na referencia/cod/id do arquivo
	fclose($arquivo);

	echo $conteudo;
	//redirecionar para pagina abrir_chamado
	header('Location: contato.php')
?>
