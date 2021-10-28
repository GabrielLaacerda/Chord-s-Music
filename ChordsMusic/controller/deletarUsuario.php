<?php

$id = $_POST["id"];

include('../controller/connBD.php');

if ($conexao) {

    if(mysqli_query($conexao, "delete from favoritos where fk_id_usuario = '$id';") and mysqli_query($conexao, "delete from comentarios where fk_id_usuario = '$id';") and mysqli_query($conexao, "delete from usuario where id_usuario = '$id';")){

        echo "Conta excluida com sucesso";
        include('logout.php');
    }
    else{
        echo "Não foi possivel excluir sua conta";
    }
}

?>