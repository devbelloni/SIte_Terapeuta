<?php
	include_once('conexao.php');
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$fone = $_POST['fone'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];
	
	$result_msg_contato = "INSERT INTO mensagem_table (Nome, Email, Fone, Assunto, Mensagem, CreationDate) VALUES ('$nome', '$email', '$fone', '$assunto', '$mensagem', NOW())";
	$resultado_msg_contato= mysqli_query($conn, $result_msg_contato);

?>
    <!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="./estilo.css">
	</head>
	<body>
	<p id="msg">Dados gravados com sucesso!!!</p>
	<br><br>
	<input type="button" value="Voltar" onClick="history.go(-1)"> 
	</body>
	</html>
