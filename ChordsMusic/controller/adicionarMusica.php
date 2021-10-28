<?php

include('../controller/connBD.php');

if($conexao){

$nomemusica = addslashes($_POST["nomemusica"]);
$nomebanda = addslashes($_POST["nomebanda"]);
$linkdamusica = $_POST["linkmusica"];

$musica= "insert into musicas (nome_musica,link_musica,nome_banda) values ('$nomemusica','$linkdamusica','$nomebanda');";

try{
    if(mysqli_query($conexao, $musica)){

        $sucess ="<div class='alert alert-success' role='alert'>"
        ."Musica Cadastrada com Sucesso"
        ."</div>";

        echo $sucess;

    } else{

        throw new Exception('Erro');
    }

}catch(Exception $j){

    $error = "<div class='alert alert-danger' role='alert' style='margin-top:2%'>"
    ."Erro ao Cadastrar Musica"
    ."</div>";

    echo $error;

}

  
}else{
    echo"Nao foi possivel conectar ao banco de dados!";
}

?>