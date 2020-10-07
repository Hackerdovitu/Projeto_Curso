<?php 

	class Conexao{

		private $host = 'localhost';
		private $bd_name = 'bd_teste';
		private $usuario = 'root';
		private $senha = '';

		public function conectar(){

			try{
					
				$conexao = new PDO(
					"mysql:host=$this->host;dbname=$this->bd_name",
					"$this->usuario",
					"$this->senha"
				);

				return $conexao;


			}catch(PDOException $e){
				echo '<p> Erro de nº: '.$e->getCode().'<br>Mensagem: '. $e->getMessage().'<p>';
			}

		}	


	}

	


?>

<?php
	if (isset($_GET['email']) && $_GET['email'] == 'notfound') {
		echo '<div class="alert alert-danger text-center mt-3" role="alert">Email não encontrado</div>';
	}
?>

