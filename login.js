$(document).ready(function () {

	// Ao clicar no campo de usuário, se ainda tiver o texto padrão, limpa o campo
	$('#usuario').click(function () {
		if ($(this).val() == 'usuario') {
			$(this).val('');
		} // fim do if
	}); // fim do click no objeto id=usuario


	// Ao clicar no campo de senha, se ainda tiver o texto padrão, limpa o campo
	$('#senha').click(function () {
		if ($(this).val() == 'senha') {
			$(this).val('');
		} // fim do if
	}); // fim do click no objeto id=senha


	$('#botaoLogar').click(function () {

		let usuario = $('#usuario').val().trim();
		let senha = $('#senha').val();

		if (usuario == '' || usuario == 'usuario' || senha == '' || senha == 'senha') {

			$('#mensagem').html('Usuário ou senha inválidos');
			$('#mensagem').fadeIn(300).delay(2000).fadeOut(400);
			return;

		}

		fetch('validar.php', {

			method: 'POST',
			headers: {
				'Content-Type': 'application/x-www-form-urlencoded'
			},

			// encodeURIComponent evita quebrar o body caso o e-mail/senha
			// contenha caracteres como &, = ou espaços
			body: 'u=' + encodeURIComponent(usuario) + '&s=' + encodeURIComponent(senha)

		})

		.then(response => response.text())

		.then(retorno => {

			retorno = retorno.trim(); // remove espaços/quebras de linha do PHP

			console.log(retorno);

			if (retorno == 'ok') {

				window.location.href = 'painel.php';

			} else {

				$('#mensagem').html('Usuário ou senha inválidos');
				$('#mensagem').fadeIn(300).delay(2000).fadeOut(400);
			}

		})

		.catch(function (erro) {

			console.log(erro);

			$('#mensagem').html('Erro ao conectar');
			$('#mensagem').fadeIn(300).delay(2000).fadeOut(400);

		});

	});

});
