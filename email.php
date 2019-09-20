<?php
// inclusao do arquivo com a funcao de envio e email
require('includes/phpmailer/hdw-phpmailer.php');

// recebe os campos do formulario
$nome		= $_POST["name"];
$email		= $_POST["email"];
//$telefone	= trim($_REQUEST['telefone']);
//$celular	= trim($_REQUEST['celular']);
//$cidade		= trim($_REQUEST['cidade']);
$mensagem	= $_POST["comment"];
/*
if (empty($nome) or empty($email) or empty($messagem)){
	echo "<script>alert('Digite o seu nome, uma mensagem e um endereço de e-mail válido.');history.back();</script>";
} else {
*/
	// data, hora e IP de envio
	$datahora = date('d/m/Y H:i:s');
	$IP = $_SERVER['REMOTE_ADDR'];

	// assunto e texto da mensagem em HTML
	$emailAssunto = 'Contato vindo do site glfreitas.com.br';
	$emailMensagem = "
		<strong>{$emailAssunto}</strong>
		<br />
		<hr />
		<strong>Nome:</strong> {$nome}
		<br />
		<strong>Email:</strong> {$email}
		<br />
		<br />
		<strong>Mensagem:</strong>
		<br />
		{$mensagem}
		<br />
		<hr />
		<strong>Data/Hora:</strong> {$datahora}
		<br />
		<strong>IP:</strong> {$IP}
		<br />
		<br />
	";

	//<strong>Telefone:</strong> {$telefone}<br />
	//<strong>Celular:</strong> {$celular}<br />

	// DADOS DO REMETENTE (quem envia o email)
	$emailDe = array();
	// informe o email do remetente
	$emailDe['from']		= 'glfreitas@glfreitas.com.br';
	// informe o nome do remetente
	$emailDe['fromName']	= $nome;
	// informe o email para resposta
	$emailDe['replyTo']		= $email;
	// informe o email de retorno em caso de erro
	$emailDe['returnPath']	= 'glfreitas@glfreitas.com.br';
	// informe o email para envio de confirmacao de leitura
	// deixe vazio para nao enviar confirmacao
	$emailDe['confirmTo']	= '';


	// DADOS DO DESTINATARIO (quem ira receber o email)
	$emailPara = array();
	// informe o email do destinatario
	$emailPara['to']		= 'glfreitas3@gmail.com';
	// informe o nome do destinatario
	$emailPara['toName']	= 'Guilherme';


	// DADOS DA CONTA SMTP PARA AUTENTICACAO DO ENVIO
	$SMTP = array();
	$SMTP['host']		= '???';
	$SMTP['port']		= ???; // para o gmail utilize 587
	$SMTP['encrypt']	= ''; // ssl ou tls ou vazio, para o gmail utilize tls
	$SMTP['username']	= '???'; // recomendamos criar uma conta de email somente para ser utilizada aqui
	$SMTP['password']	= '???'; // pois cada vez que a senha for alterada este arquivo tambem devera ser atualizado

	$mail = "";

	// faz o envio
	$mail = sendEmail($emailDe, $emailPara, $emailAssunto, $emailMensagem, $SMTP);
/*
	if($mail !== TRUE){
		// redireciona ou exibe uma mensagem de erro
		//header('location: erro.html'); exit;
		echo('Nao foi possivel enviar a mensagem.<br />Erro: '.$mail); exit;
	}

*/
	if ($mail == TRUE) {
		echo "<script>alert('Seu e-mail foi enviado! Obrigado!');history.back();</script>";
	} else {
		echo "<script>alert('Seu e-mail falhou. Tente novamente mais tarde.');history.back();</script>";
	}

// redireciona ou exibe a mensagem de agradecimento
//header('location: obrigado.html'); exit;

?>
