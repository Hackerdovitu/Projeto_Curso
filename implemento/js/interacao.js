function comentar() {

	//recebendo os valores digitados nos inputs
	let nome = document.getElementById('nome')
	let comentario = document.getElementById('comentario')
	
	//efetuando a remoção do 'is-invalid'
	nome.classList.remove('is-invalid')
	comentario.classList.remove('is-invalid')
	
	//atribuindo os valores
	nome = nome.value
	comentario = comentario.value

	//validação de dados
	if (nome != '' && comentario != '') {
		let div = document.getElementById('comentarios');
		div.innerHTML += `<h5>${nome} comentou: </h5> <span>~${comentario}</span> <hr>`
		
		document.getElementById('comentarios').style.border = '1px solid #d1d1d1';
		document.getElementById('comentarios').style.bordeRadius = '20%';

		document.getElementById('nome').value = '';
		document.getElementById('comentario').value = '';
	}else if(nome == ''){
		document.getElementById('nome').classList.add('is-invalid');
		
		/*txt de aviso (rever**)
		document.getElementById('campo_vazio_01').classList.add('fas');
		document.getElementById('campo_vazio_01').classList.add('fa-exclamation');
		document.getElementById('campo_vazio_01').style.color = 'red'
		document.getElementById('campo_vazio_01').innerHTML = 'Campo Vazio'*/
		
		if(comentario == ''){
			document.getElementById('comentario').classList.add('is-invalid');
		}
	}
	else if(comentario == ''){
		document.getElementById('comentario').classList.add('is-invalid');
		if(nome == ''){
			document.getElementById('nome').classList.add('is-invalid');
		}
	}
}




/*------------------------------------------------------------------*/
function validar_nome(){
	let nome = document.getElementById('nome_registro')	;

	nome.classList.remove('is-invalid');

	nome = nome.value;

	if (nome <= ' ') {
		let div = document.getElementById('nome_registro').classList.add('is-invalid');

		document.getElementById('aviso_campo_vazio00').style.color = 'red';
		document.getElementById('aviso_campo_vazio00').innerHTML = 'Preencha este campo!';
	}else if(nome >= ''){
	document.getElementById('aviso_campo_vazio00').innerHTML = '';
	}
}

function validar_email(){
	let email = document.getElementById('email_registro');

	email.classList.remove('is-invalid');

	email = email.value

	if (email <= ' ') {
		let div = document.getElementById('email_registro').classList.add('is-invalid');

		document.getElementById('aviso_campo_vazio').style.color = 'red';
		document.getElementById('aviso_campo_vazio').innerHTML = 'Preencha este campo!';
	}else if(email >= ''){
	document.getElementById('aviso_campo_vazio').innerHTML = '';
	}

	
}

function validar_senha() {
	let senha = document.getElementById('senha_registro');

	senha.classList.remove('is-invalid');

	senha = senha.value

	if (senha <= ' ') {
		let div = document.getElementById('senha_registro').classList.add('is-invalid');

		document.getElementById('aviso_campo_vazio02').style.color = 'red';
		document.getElementById('aviso_campo_vazio02').innerHTML = 'Preencha este campo!';
	}else if(senha >= ''){
		document.getElementById('aviso_campo_vazio02').innerHTML = '';
	}
}

function validar_confirmarSenha() {
	let senha = document.getElementById('confirmarSenha_registro');

	senha.classList.remove('is-invalid');

	senha = senha.value

	if (senha <= ' ') {
		let div = document.getElementById('confirmarSenha_registro').classList.add('is-invalid');

		document.getElementById('aviso_campo_vazio03').style.color = 'red';
		document.getElementById('aviso_campo_vazio03').innerHTML = 'Preencha este campo!';
	}else if(senha >= ''){
		document.getElementById('aviso_campo_vazio03').innerHTML = '';
	}
}

function alerta_de_erro(){
	alert("Dados não encontrados no banco de dados!");

	document.getElementById('email_registro').value = '';
	document.getElementById('senha_registro').value = '';
}

function google(){
	alert("Infelizmente não é possivél conectar com o google!");

	document.getElementById('email_registro').value = '';
	document.getElementById('senha_registro').value = '';
}

function onlynumber(evt) {
   let theEvent = evt || window.event;
   let key = theEvent.keyCode || theEvent.which;
   key = String.fromCharCode( key );
   //let regex = /^[0-9.,]+$/;
   let regex = /^[0-9.]+$/;
   if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
   }
}

function validar_ncartao() {
	let ncartao = document.getElementById('inputNumeroCartao');

	ncartao.classList.remove('is-invalid');

	ncartao = ncartao.value

	if (ncartao <= ' ') {
		let div = document.getElementById('inputNumeroCartao').classList.add('is-invalid');

		document.getElementById('aviso_ncartao').style.color = 'red';
		document.getElementById('aviso_ncartao').innerHTML = 'Preencha este campo!';
	}else if(ncartao >= ''){
		document.getElementById('aviso_ncartao').innerHTML = '';
	}
}

function validar_cvv() {
	let cvv = document.getElementById('inputCVV');

	cvv.classList.remove('is-invalid');

	cvv = cvv.value

	if (cvv <= ' ') {
		let div = document.getElementById('inputCVV').classList.add('is-invalid');

		document.getElementById('aviso_cvv').style.color = 'red';
		document.getElementById('aviso_cvv').innerHTML = 'Preencha este campo!';
	}else if(cvv >= ''){
		document.getElementById('aviso_cvv').innerHTML = '';
	}
}

function validar_validade() {
	let validade = document.getElementById('inputValidade');

	validade.classList.remove('is-invalid');

	validade = validade.value

	if (validade <= ' ') {
		let div = document.getElementById('inputValidade').classList.add('is-invalid');

		document.getElementById('aviso_validade').style.color = 'red';
		document.getElementById('aviso_validade').innerHTML = 'Preencha este campo!';
	}else if(validade >= ''){
		document.getElementById('aviso_validade').innerHTML = '';
	}
}

function boleto() {
	alert("Infelizmente o gerador de boletos está fora do ar!");
}