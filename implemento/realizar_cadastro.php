<?php
	
	echo "<pre>";
	print_r($_POST);

	class RealizarCadastro{
		private $id_usuario;
		private $email;
		private $senha;
		private $nome;

		public function __get($atributo){
			return $this->$atributo;
		}
		
		public function __set($atributo, $valor){
			$this->$atributo = $valor;
		}

		public function __construct(){
			if ($_POST['senha'] != $_POST['confirmarSenha']) {
				header('location: registro.php?senhas=diferentes');
			}
		}
	}

	$user = new RealizarCadastro();

	$user->__set('email' ,$_POST['email']);
	$user->__set('senha' ,$_POST['senha']);
	$user->__set('nome' ,$_POST['nome']);

	print_r($user);

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
				echo 'Erro de nº: '.$e->getCode().' Mensagem: '.$e->getMessage();
			}
		
		}

	}

	$conexao = new Conexao();

	$conexao->conectar();
	print_r($conexao);

	class AtribuirBD{
		private $conexao = null;
		private $email = null;
		private $senha = null;
		private $nome = null;

		public function __construct($conexao, $email, $senha, $nome){
			$this->conexao = $conexao->conectar();
			$this->email = $email;
			$this->senha = $senha;
			$this->nome = $nome;
		}

		public function inserir(){ //into
			$valor_email = $this->email;
			$valor_senha = $this->senha;
			$valor_nome = $this->nome;
			
			//-----------------------------------
			// APAGAR DADOS EXISTENTES NO BANCO DE DADOS
			/*$query = "delete from tbl_usuario";
			$this->conexao->exec($query);*/
			//-----------------------------------

			$query = "
	insert into tbl_usuario(email, senha, nome) values ('$valor_email','$valor_senha','$valor_nome')

				";

			return $this->conexao->exec($query);
		}

		public function recuperar(){ //read = select
			$query = "select email, senha, nome from tbl_usuario";

			$stmt = $this->conexao->query($query);

			return $stmt->fetchAll(PDO::FETCH_ASSOC);

		}

		
	}

	$atribuir = new AtribuirBD($conexao, $user->__get('email'), $user->__get('senha'), $user->__get('nome'));

	$dados = $atribuir->recuperar();
	
	if(isset($_POST['email'])){ 

    $emailPostado = $_POST['email'];

    $con = mysqli_connect("localhost", "root", "", "bd_teste");
    $sql = mysqli_query($con, "SELECT * FROM tbl_usuario WHERE email = '{$emailPostado}'") or print mysql_error();

    if(mysqli_num_rows($sql)>0){
        echo json_encode(array('email' => 'Ja existe um usuario cadastrado com este email'));
		$_SESSION['autenticado'] = 'nao';	
    	header('location: registro.php?email=invalido');
    } 
    else{ 
    	$_SESSION['autenticado'] = 'sim';
        echo json_encode(array('email' => 'Usuário valido.' )); 
		$atribuir->inserir();
		header('location: login.php?registro=sucesso');
	}
}
	
	print_r($atribuir);

	print_r($dados);

?>