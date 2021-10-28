<?php

include('../controller/connBD.php');

if($conexao){

    if (!isset( $_SESSION ) ) 
    { 
        session_start();
    }

    $email = $_SESSION['email'];
    $id_user = mysqli_query($conexao,"select id_usuario from usuario where email = '$email';");

    while ($id_u = mysqli_fetch_assoc($id_user)) {
        $idUsuario = $id_u["id_usuario"];
    }

    $favorito = $_GET["id"];
    
    $query = mysqli_query($conexao,"select id_cifra from cifra where fk_musica = '$favorito';");

    while ($id_c = mysqli_fetch_assoc($query)) {
        $idCifra = $id_c["id_cifra"];
    }

    $deletar = "delete from favoritos where fk_id_cifra = '$idCifra' and fk_id_usuario = '$idUsuario';";

    if(mysqli_query($conexao, $deletar)){
        header('Location: ../View/Favoritos.php');
        exit;
    }
    else{
        
    }

}
