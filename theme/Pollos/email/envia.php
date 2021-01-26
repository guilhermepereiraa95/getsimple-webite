<?php

require("PHPMailerAutoload.php");
require("class.smtp.php");
require("class.phpmailer.php");

	$emailRemetente		= "comercial@marllostransportes.com.br";
	$senha 				= "com1122"; 
	$nomeRemetente		= "Contato Site";
	$emailDestinatario	= "comercial@marllostransportes.com.br"; // Ou qualquer outro email por meio de que o cliente deseje receber suas mensagens
	$origem 			= strip_tags( trim($_POST['origem'] ) );
	
		
	//Procura por 'injections ' em headers e outros códigos maliciosos e
	//Detecta conteúdos e strings tipo “[url]” que são usadas tipicamente por spammers.
	if(preg_match( "/bcc:|cc:|multipart|\[url|Content-Type:/i", implode($_POST))){exit();}
	
	//Detecta links e URLs nos campos de formulário. Invalida a mensagem caso maisdo que 2 instâncias de “<a” ou “http:” forem detectados.
	if(preg_match_all("/<a|http:/i", implode($_POST), $out) > 2){exit();}
	

	
		
		$campos = array(
					"Nome" => $_POST['nome'],
					"E-mail" => $_POST['email'],
					"Mensagem" => $_POST['msg'],
						);
		
		$corpo = "<html><body><p>Segue abaixo os dados novo contato realizado via site:</p><p>";
		
		foreach($campos as $label => $value){
			
			$corpo .= "$label:<strong>$value</strong><br />"; 
		}
		
		$corpo .= "</p></body></html>";
					
	
	$origem = 'Contato';
 
	$mail = new PHPMailer;
	$mail->isSMTP();                 				// Set mailer to use SMTP
	$mail->Host = 'smtp.uni5.net';  				// Specify main and backup SMTP servers
	//$mail->Host = 'smtp.gmail.com';  				// Specify main and backup SMTP servers
	$mail->SMTPAuth = true;         				// Enable SMTP authentication
	$mail->Username = $emailRemetente;				// SMTP username
	$mail->Password = $senha;	                   	// SMTP password
	$mail->SMTPSecure = 'tls';                      // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                              // TCP port to connect to
	$mail->IsHTML(true);
	$mail->From = $emailRemetente;
	$mail->FromName = $nomeRemetente;
	$mail->addAddress($emailDestinatario);			// Add a recipient
	$mail->addReplyTo($campos["E-mail"], utf8_decode($campos["Nome"]));
	$mail->Subject = utf8_decode($origem);
	$mail->Body    = utf8_decode($corpo);

	if($mail->send())
	{
		echo "Sua mensagem foi enviada com sucesso. Em breve, entraremos em contato com você para responder sua mensagem.";
	}
	else
	{
	//	$erro = $mail->ErrorInfo;
		echo json_encode($mail->ErrorInfo); echo $corpo;
		echo "Houve um erro e sua mensagem não pôde ser enviada";
		exit();
	}

	$mail->ClearAllRecipients();
	$mail->ClearAttachments();
?>




