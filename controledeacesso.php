<html>				<!DOCTYPE html>
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ester Belloni</title>
    <!--Chama o favicon-->
    <link rel="shortcut icon" href="imagem/favicon.ico" type="image/x-icon">
    <!--Chama o css-->
    <link rel="stylesheet" type="text/css" href="./estilo.css">
</head>
<body>
<nav>
    <a href="home.html">HOME</a>
    <a href="florais.html">FLORAIS</a>
    <a href="aromaterapia.html">AROMATERAPIA</a>
    <a href="cromoterapia.html">CROMOTERAPIA</a>
    <a href="fitoterapia.html">FITOTERAPIA</a>
    <a href="radiestesia.html">RADIESTESIA</a>
    <a href="reiki.html">REIKI XAMÂNICO</a>
    <a href="cristaloterapia.html">CRISTALOTERAPIA</a><br>
    <a href="tarot.html">TERAPIA COM ORÁCULOS</a>
    <a href="pets.html">TERAPIA PARA PETS</a>
    <a href="form.html">CONTATO</a>
    <a id="principal" href="intranet.php">INTRANET</a>

  </nav>  
  <div>
  <br>  <h1>MENSAGENS RECEBIDAS</h1>


<?php
session_start();

include_once('conexao.php');

$user = $_POST['login'];
$pass = $_POST['senha'];

   if (empty($_POST['login']) || empty($_POST['senha'])){header('location:intranet.php');}

    $verifica = mysqli_query($conn,"SELECT * FROM login_table WHERE login ='$user' AND senha = '$pass'") or die("erro ao selecionar");

    if (mysqli_num_rows($verifica)<=0){
        unset ($_SESSION['user']);
        unset ($_SESSION['pass']);
        header('Location:intranet.php');
		echo "<script type='javascript'>alert('Login e/ou senha errados');";

    }
    if(mysqli_num_rows($verifica)>0){
        setcookie("user",$user);
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
	}      

	  

// seleciona a base de dados em que vamos trabalhar
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT Nome, Email, Fone, Assunto, Mensagem, CreationDate FROM `mensagem_table`");
// executa a query

// gera as variáveis

$Nome = ['Nome']; 
$Email = ['Email']; 
$Fone ="Fone"; 
$Assunto ="Assunto"; 
$Mensagem ="Mensagem"; 
$CreationDate ="CreationDate";

$dados = mysqli_query($conn, $query);
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);




	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) 
	{

		do {
			?>
			
				<b> Nome: </b><?=$linha['Nome']?> <b>| Email: </b><?=$linha['Email']?><b>|Telefone: </b><?=$linha['Fone']?><b></br>Assunto: </b><?=$linha['Assunto']?><b>|Mensagem: </b><?=$linha['Mensagem']?><b></br>Data de envio: </b><?=$linha['CreationDate']?></br></br>
			<?php
			}// finaliza o loop que vai mostrar os dados</html>
		
		while($linha = mysqli_fetch_assoc($dados));
	// fim do if
	}
// tira o resultado da busca da memória
mysqli_free_result($dados);


//sprintf("SELECT Nome, Email, Fone, Assunto, Mensagem, CreationDate FROM `mensagem_table`");

?>

<form action="excluimensagem.php" method="post">
        <input type="submit" name="enviar" value="Excluir"/></br>
</form>
<form action="cadastrar.php" method="post">
        <input type="submit" name="cadastrar" value="Cadastrar novo Usuário"/></br>
</form>
                </div> </a>
</form>
  </div>
</html>