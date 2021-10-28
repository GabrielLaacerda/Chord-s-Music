<?php

if (!isset( $_SESSION ) ) 
{ 
    session_start();
}

include('../controller/connBD.php');

if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
}

$nome = $_POST["nome"];
$senha = $_POST["senha"];

$alterar = mysqli_query($conexao,"UPDATE usuario SET nome = '$nome', senha = '$senha'
 WHERE email = '$email';");

header('Location: ../View/PerfilUsuario.php');
exit;

?>