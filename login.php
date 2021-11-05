<?php
session_start();

include_once('conexao.php');

$user = $_POST['login'];
$pass = $_POST['senha'];

if (empty($_POST['login']) || empty($_POST['senha'])){header('location:index.html');}

    $verifica = mysqli_query($conn,"SELECT * FROM login_table WHERE login ='$login' AND senha = '$pass'") or die("erro ao selecionar");

    if (mysqli_num_rows($verifica)<=0){
        unset ($_SESSION['user']);
        unset ($_SESSION['pass']);
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='intranet.html';</script>";die();}
        
    else{
        setcookie("user",$user);
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        header('Location:controledeacesso.php');
      }
?>