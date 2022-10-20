<?php
	$captcha_data = isset($_POST['gRecaptchaResponse']) ? $_POST['gRecaptchaResponse'] : false;
	$json_resp = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LdNDRwUAAAAAP0_mIXjx9et04vRXtlmzmwl2iL5&response='.$captcha_data.'&remoteip='.$_SERVER['REMOTE_ADDR']); //TROCAR
	$resposta = json_decode($json_resp);
	
	if ($captcha_data == false || $resposta->success != 1) {
		echo "<p><span class='form-error'>Houve um erro na sua verificação, por favor ateste que você não é um robô novamente.</span></p>";
		exit();
	}

	$nome = $_POST['nome'];
	$remetente = $_POST['email'];
	$mensagem = $_POST['mensagem'];
	$assunto = 'Formulário: PET - ' . $_POST['assunto'];
	
	$para = 'petgeo@uel.br';
	$corpo = "<html><body>
			  <p>Nome: $nome <br />
			  Email: $remetente </p>
			  <p>Mensagem:<br />&quot; $mensagem &quot;</p>
			  </body></html>";
	//TROCAR
	$headers = "From: $nome <$para>\r\n
			   Reply-To: $remetente \r\n
			   MIME-Version: 1.0\r\n
			   Content-type: text/html; charset=UTF-8\r\n";
	
	$enviar = mail($para, $assunto, $corpo, $headers);
	
	if ($enviar == true) {
		echo('<span class="form-success">O seu formulário foi enviado com sucesso, aguarde pois em breve lhe responderemos.<br />Clique <a href="index.php">aqui</a> para voltar para a página inicial.</span>');
	}
	else {
		echo('<span class="form-error">Não é você, somos nós... Infelizmente houve um erro no envio. Por favor, <a href="contato.php">tente novamente</a>.</span>');
	}
?>