<?php
include_once('conexao.php');
$newuser = $_POST['newuser'];
$newpass = $_POST['newpass'];


  if($newuser == "" || $newuser == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastro.html';</script>";

    }else{
        $query = "INSERT INTO login_table (login,senha) VALUES ('$newuser','$newpass')";
        $insert = mysqli_query($conn,$query);
        include('controledeacesso.php');
        echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');</script>";
    }
?>