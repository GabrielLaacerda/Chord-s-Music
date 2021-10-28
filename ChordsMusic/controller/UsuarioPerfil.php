<?php

include('../controller/connBD.php');

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}

$dados = mysqli_query($conexao, "select * from usuario where email = '$email';");

while ($d = mysqli_fetch_assoc($dados)) {
    
    $id = $d["id_usuario"];
    $nome = $d["nome"];

}

?>