<?php 
	require('PHPmailer/PHPMailer.php');
	require('PHPmailer/Exception.php');
	require('PHPmailer/OAuth.php');
	require('PHPmailer/POP3.php');
	require('PHPmailer/SMTP.php');

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require('conexao_banco.php');
	
	if (isset($_POST['ok'])) {

		$email = ($_POST['email']);

		$query = "SELECT email FROM tbl_usuario WHERE email='$email'";
		$conexao = new Conexao();
		$conexao = $conexao->conectar();
		$stmt = $conexao->query($query);
		$res = $stmt->fetchAll(PDO::FETCH_ASSOC);	

	    if (empty($res) || !$res) {
	       header("Location: enviar_email.php?erro=email"); 
	       return false;
	    }


		$novaSenha = substr(md5(time()), 0, 6); 

		$assunto = 'Suporte Magnetic Blanket - Recuperar Senha';
		$msg = "<p>Ola!</p> <p>Você solicitou a recuperação de sua senha no nosso site! </p> <p>Sua senha foi redefinida para : $novaSenha </p> <p>Ao logar, redifina sua senha para melhor conforto.</p>";	

		$query = "UPDATE tbl_usuario SET senha='$novaSenha' WHERE email='$email'";
		$conexao->exec($query);


		$mail = new PHPMailer(true);
		try {
		    //Server settings
		    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'vitoraraujob03@gmail.com';                 // SMTP username
		    $mail->Password = 'vitortobby921209';                           // SMTP password
		    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 587;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom('vitoraraujob03@gmail.com');
		    $mail->addAddress($email);     // Add a recipient

		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = $assunto;
		    $mail->Body    = $msg;
		    $mail->AltBody = 'Erro ao enviar';

			header('Location: enviar_email.php?enviado=true');
		    $mail->send();
		    
		} catch (Exception $e) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}

	}

?>