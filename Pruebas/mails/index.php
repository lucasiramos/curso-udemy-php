<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	// Load Composer's autoloader
	require 'vendor/autoload.php'; 

	// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	/*
	// Envío de correos desde la cuenta del GML, funca!
	try {
		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;
		$mail->isSMTP();
		
		$mail->Host = 'mail.grupodemusicaliturgica.org.ar';
		$mail->Port = 465;
		$mail->SMTPSecure = 'ssl';

		$mail->SMTPAuth = true;
		$mail->Username = 'contacto@grupodemusicaliturgica.org.ar'; // SMTP username
		$mail->Password =  'santacecilia'; // Este es mi password de aplicaciones
		//$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted // PHPMailer::ENCRYPTION_STARTTLS; 
		
		$mail->SMTPOptions = array(
		   'ssl' => array(
			 'verify_peer' => false,
			 'verify_peer_name' => false,
			 'allow_self_signed' => true
			)
		);

		// Destinatarios
		$mail->setFrom('ramosilucas@gmail.com');
		$mail->addAddress('lucasiramos@hotmail.com');

		// Content
		$mail->isHTML(true);
		$mail->Subject = 'Prueba de correo desde GML';
		$mail->Body    = 'Hola que tal <b>en negrita! GML GML GML</b>';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		echo 'Mensaje enviado desde Gmail, esperemos...';
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	} */


	/* //////////////////////////////////////////////////////////////////////////////////////// */

	//	ENVIAR A TRAVES DE GOOGLE, FUNCA!!

	try {
		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;
		$mail->isSMTP();
		
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';
		$mail->CharSet = 'UTF-8';
		$mail->SMTPAuth = true;
		$mail->Username = 'ramosilucas@gmail.com'; // SMTP username
		$mail->Password =  'azrdafjuocnbsals'; // Este es mi password de aplicaciones // ogbworhayknsuqty

		$mail->SMTPOptions = array(
		   'ssl' => array(
			 'verify_peer' => false,
			 'verify_peer_name' => false,
			 'allow_self_signed' => true
			)
		);

		// Destinatarios
		$mail->setFrom('ramosilucas@gmail.com');
		$mail->addAddress('lucasiramos@yahoo.com.ar');
		$mail->addAddress('lucasiramos@hotmail.com');
		$mail->addAddress('ramos.lucas@inta.gob.ar');

		// Content
		$mail->isHTML(true);
		$mail->Subject = 'Probamos con tíldes áéíóú';

		// Imagen
		$mail->AddEmbeddedImage('plantillas_mail/prueba_responsive/futbol.png', 'header', 'futbol.png', "base64", "image/png");

		$message = file_get_contents('plantillas_mail/prueba_responsive/index.html'); 
		//$message = str_replace('%username%', "LUQUITAS", $message); 
		//$message = str_replace('%password%', "UNPASSWORD", $message); 
		$message = str_replace('%imgHeader%', '<img class="rsp-img" src="cid:header" />', $message);

		$mail->Body    = $message;
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		echo 'Mensaje enviado desde Gmail/localhost/plantilla/imagen embebida, esperemos...';
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}


	/////////////////////////////////////////////////////////////////////////////
	/* EXTRAS */


	/*

	/*$mail->addAddress('ellen@example.com');               // Name is optional
	$mail->addReplyTo('info@example.com', 'Information');
	$mail->addCC('cc@example.com');
	$mail->addBCC('bcc@example.com');

	// Attachments
	$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	*/
	
?>