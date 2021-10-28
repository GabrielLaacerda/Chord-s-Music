<?php

if (!isset( $_SESSION ) ) 
{ 
    session_start();
}

include('../controller/connBD.php');

if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
}

$idmusica = $_POST["idmusica"];
$coment= $_POST["comentario"];

$buscar = mysqli_query($conexao,"select id_usuario from usuario where email = '$email';");

while ($c = mysqli_fetch_assoc($buscar)) {
    $idusuario = $c["id_usuario"];
}

$query = "insert into comentarios (fk_id_usuario,fk_id_cifra,comentario,createAt) values('$idusuario','$idmusica','$coment',NOW());";

if(mysqli_query($conexao,$query)){
    echo "Comentario Registrado";
    
}
else{
    echo"Erro ao registrar Comentario";
}

?>