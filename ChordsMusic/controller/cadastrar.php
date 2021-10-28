<?php

if (!isset( $_SESSION ) ) 
{ 
    session_start();
}

include('../controller/connBD.php');

$nome = $_POST["nome2"];
$email = $_POST["email2"];
$senha = $_POST["senha2"];

$sql = "select count(*) as total from usuario where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
    
	header('Location: ../View/CadastrarUsuario.php');
	exit;
}

$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: ../View/CadastrarUsuario.php');
exit;
?>