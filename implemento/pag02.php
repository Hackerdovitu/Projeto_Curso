<?php
require ("verificar_autenticacao.php");
?>
<!DOCTYPE html>
	<html lang="pt-br">
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5079567911.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <title>Descrição</title>

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
                  <a href="index.php" accesskey="i" class="nav-link" id="alinhamento"><span style="text-decoration: underline;">I</span>nicio</a>
                </li>
                <li class="nav-item">
                  <a href="pag02.php" accesskey="s" class="nav-link  pag_atual" id="alinhamento"><span style="text-decoration: underline;">S</span>obre</a>
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
    
    <article class="container">
        <div class="navbar-collapse fixed-bottom" id="nav-principal">
          <li class="nav-item aba-flutuante01">
             <a href="#problematica" class="nav-link" id="alinhamento">Problemática</a>
          </li>
          <li class="nav-item aba-flutuante02">
            <a href="#solucao" class="nav-link" id="alinhamento">Solução</a>
          </li>
        </div>

      <div class="row" id="resumo_problematica">

        <div class="col-7">
          <span id="problematica" class="h3 text-uppercase titulo-tema text-decoration-none"> problemática </span>
          <br><span id="subtitulo"> Limpeza Manual de Vagões </span>
          <p id="informativo" class="lead">
        O transporte de matérias primas como minério de ferro e carvão mineral em vagões de transporte é um meio bastante viável para a produção do aço, porém devido à umidade ou até mesmo em períodos de chuva ocorre o agarramento desses materiais no fundo do vagão fazendo com que o mesmo esteja sujeito a uma limpeza manual a qual expõe o funcionário a riscos ergonômicos.</p>
        </div>

        <div class="col-5">
          <img id="img" src="img/Car dumper.jpg" alt="">
        </div>

        <div class="row container">
          <div class="col">
            <p id="informativo" class="lead">
              O Brasil possui aproximadamente 29 mil quilômetros de malha ferroviária onde são transportados diversos tipos de materiais, tais como minério de ferro, carvão mineral, entre outros. Várias indústrias siderúrgicas dependem do transporte ferroviário para receber a matéria prima utilizada para produzir seu produto final que é o aço.
              Hoje em dia, em linhas modernas, existem trens com eixos para capacidade de 30 toneladas, que podem transportar cargas de até 120 toneladas.
              Para adequar a este sistema as empresas precisam ter um equipamento denominado “Virador de vagões” (Car dumper), onde são basculados os materiais citados acima em grande quantidade.
              Uma das maiores dificuldades nesse processo acontece quando os vagões são basculados no virador de vagões e o material não é totalmente desprendido de seu fundo, sendo assim passível a um retrabalho o qual é feito manualmente. Essa atividade consiste em remover o material restante no fundo dos vagões manualmente, utilizando de uma espátula, deixando assim o colaborador totalmente exposto a riscos ergonômicos e de acidentes.
            </p>
          </div>
        </div>

      </div>

      <hr> 

      <div class="row" id="resumo_solucao">
        <div class="col-5">
         <img id="img" src="img/solucao.png">
        </div>
        <div class="col-7">
          <span href="pag02.html" id="solucao" class="h3 text-uppercase titulo-tema text-decoration-none"> Solução </span>
          <br><span id="subtitulo">Solução para a problemática</span>
          <p id="informativo" class="lead">Com tudo, o que queremos é que a problemática seja resolvida com o projeto Magnetic Blanket, fazendo que o produto possa ser reutilizável para vagões de trens de carga, depois do seu uso, por tanto os funcionários não estaria exposto a danos a sua saúde ,assim os vagões seriam limpos sem precisar de tanto esforços para retirar os excessos de resíduos existente quando os minérios e minerais está passado para outra etapa, com isso, os vagões teria uma eficaz maior, pois seria algo que não consumiria o tempo do funcionário e não se submetia a algo que pudesse fazer algo que lhe prejudicasse ao longo da vida do empregado.  <a href="file:///C:/Users/Emanuel/Documents/Atividade%20-%20Curso%20TIPI/Magnetic%20Blanket/Magnetic%20Blanket/Magnetic%20Blanket.pdf">Leia mais sobre o assunto...</a></p>
        </div>
      </div>
    </article>

    <footer id="rodape">
      <div class="container" id="carrossel">
        <div class="row">
          <div class="col-3"></div>
          <div class="col col-sm-6">
            <h2 id="carrossel-titulo" style="text-align: center;">Veja o andamento do projeto!</h2>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/carousel1.png" class="d-block" id="carousel">
                  </div>
                  <div class="carousel-item">
                    <img src="img/carousel2.png" class="d-block" id="carousel">
                  </div>
                  <div class="carousel-item">
                    <img src="img/carousel3.png" class="d-block" id="carousel">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
          </div>
          <div class="col-3"></div>
        </div>
      </div>
        © Todos os direitos reservados
    </footer>

   
   


















    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
</body>
</html>