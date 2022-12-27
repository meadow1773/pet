$('form#contato').submit(function (event) {
	event.preventDefault();

	// VALIDACAO

	var captcha = grecaptcha.getResponse();
	var regEmail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	if ($('input[name=nome]').val() == "") {
		alert('Por favor, preencha seu nome!');
		return false;
	}
	else if (!regEmail.test($('input[name=email]').val())) {
		alert('Por favor, preencha seu email corretamente!');
		return false;
	}
	else if ($('input[name=assunto]').val() == "") {
		alert('Por favor, informe o assunto da sua mensagem!');
		return false;
	}
	else if ($('textarea[name=mensagem]').val() == "") {
		alert('Escreva sua mensagem!');
		return false;
	}
	else if (captcha.length == 0) {
		alert('Por favor, ateste que você não é um robô!');
		return false;
	}

	// ENVIO

	else {
		$.ajax({
			type: 'POST',
			url: '/src/mailSend.php',
			dataType: 'html',
			data: {
				nome: $('input[name=nome]').val(),
				email: $('input[name=email]').val(),
				assunto: $('input[name=assunto]').val(),
				mensagem: $('textarea[name=mensagem]').val(),
				gRecaptchaResponse: captcha
			}

			// RESPOSTA

		}).done(function (data) {
			$('div.page-content').append(data);
			$('span.form-success').hide().fadeIn('slow').delay('2000').fadeOut('slow');
			$('span.form-error').hide().fadeIn('slow').delay('2000').fadeOut('slow');

			$('input[name=nome]').val("");
			$('input[name=email]').val("");
			$('input[name=assunto]').val("");
			$('textarea[name=mensagem]').val("");
			$('iframe[name=undefined]').attr('src', $('iframe[name=undefined]').attr('src'));
		});
	}
});