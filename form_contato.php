<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
	<head>
	<body>
		<form method="POST" action="salva_mensagem.php">
		    <input type="text" name="nome" placeholder="Nome Completo" required></br></br>
			E-mail: <input type="email" name="email" placeholder="Seu melhor e-mail" required></br></br>
			Telefone: <input type="tel" name="fone" placeholder="(xx)xxxxxxxxx" required></br></br>
			Assunto: <input type="text" name="assunto" placeholder="Assunto do contato" required></br></br>
			Mensagem: <textarea name="mensagem"></textarea></br></br>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>