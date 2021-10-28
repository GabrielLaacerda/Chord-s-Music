<?php

if (!isset( $_SESSION ) ) 
{ 
    session_start();
}

include('../controller/connBD.php');

if($conexao){
   
if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: ../View/index.php');
	exit();
}
else{
    $email = $_POST["email"];
    $senha= $_POST["senha"];

$result = mysqli_query($conexao,"SELECT email,senha FROM usuario WHERE email = '$email' and senha = '$senha';");
$row = mysqli_num_rows($result);

if($row == 1) {

	$_SESSION['email'] = $email;

	header('Location:../View/index.php');
	exit();

} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location:../View/index.php');
	exit();
}
}
}
?>