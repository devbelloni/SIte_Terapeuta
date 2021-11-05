
<?php
session_start();
if((!isset ($_SESSION['user']) == true) and (!isset ($_SESSION['pass']) == true))
{
  unset($_SESSION['user']);
  unset($_SESSION['pass']);
  header('location:index.html');
  }

$logado = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso Restrito</title>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./estilo.css">
<form method="POST" action="cadastro.php">
<label>Novo Login:</label><input type="text" name="newuser" id="newuser"><br>
<label>Nova Senha:</label><input type="password" name="newpass" id="newpass"><br>
<input type="submit" value="Cadastrar" id="entrar" name="entrar"><br>
</form>
<a href="index.html">Voltar à página inicial</a>

<div><h1>Mensagens recebidas</h1>
     <p align="center"><iframe width=550px id="form" src=./controledeacesso.php allowfullscreen></iframe></p>
</div>    
</body>

</html>