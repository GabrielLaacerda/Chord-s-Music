<?php

include('../controller/connBD.php');

    if ($conexao) {

    $id_cifra = $_GET["id"];
    $id_us = $_GET["id2"];

    $favorito = "INSERT INTO favoritos (fk_id_cifra,fk_id_usuario,createAt) values ('$id_cifra','$id_us',NOW());";

    if(mysqli_query($conexao, $favorito)){
        header('Location: ../View/Favoritos.php');
        exit;
    } 
    
    else{
        header('Location: ../View/Favoritos.php');
        exit;
    }

    } else {
    
    }

     ?>