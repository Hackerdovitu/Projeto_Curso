

<!-- Codigos Abaixo Retirados do Projeto Trabalhado em Sala -->
<!-- Esses codigos serão reformulados e trabalhados para se encaixar na aplicação do site Magnetic Blanket -->
<!-- As estruturas abaixo serão utilizadas para verificar se foi feito cadastro ou não, se o cadastro não for feito, irá redirecionar para a pagina principal -->
<!-- Esses codigos estão sendo importados para as outras paginas a partir do requiere -->
<?php 
  session_start();
  if (  !isset($_SESSION['autenticado']) || $_SESSION['autenticado'] == 'nao'  ) {
    header('location: login.php?login=erro2');
  }
?>

