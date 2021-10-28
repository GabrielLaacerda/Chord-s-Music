<?php

include('../controller/connBD.php');

if ($conexao) {

    $favorito = "";

    $br = "<br>";
    $id_cifra = $_GET["id"];
    $cifra = mysqli_query($conexao, "select * from cifra where fk_musica = '$id_cifra' and tipo_cifra = 'original';");

    $linkdamusica = mysqli_query($conexao, "select link_musica from musicas where id_musica = $id_cifra");

    while ($c2 = mysqli_fetch_assoc($linkdamusica)) {
        $varLink = $c2["link_musica"];
    }

    while ($c = mysqli_fetch_assoc($cifra)) {
        $varTitulo = $c["titulo"];
        $varDificuldade = $c["dificuldade"];
        $varCapotraste = $c["capotraste"];
        $varTom = $c["tom"];
        $varAfinacao = $c["afinacao"];
        $varCifra = $c["cifra"];
    }

    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];

        $id_user = mysqli_query($conexao, "select id_usuario from usuario where email = '$email';");

        while ($c3 = mysqli_fetch_assoc($id_user)) {
            $id_u = $c3["id_usuario"];
        }

        $id_ci = mysqli_query($conexao, "select id_cifra from cifra where fk_musica = '$id_cifra';");

        while ($c4 = mysqli_fetch_assoc($id_ci)) {
            $id_c = $c4["id_cifra"];
        }

        $favorito =
            "<a href='../controller/favoritarCifra.php?id=$id_c&id2=$id_u' id='favoritar'>"
            . "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-bookmark-star-fill' viewBox='0 0 16 16'>"
            . "<path fill-rule='evenodd' d='M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z' />"
            . "</svg> Favoritar Cifra</a><br>";

        $comentariosLogado =

            "<div class='form-floating'>"
            . "<textarea name='comentario' class='form-control' placeholder='Escreva um comentário' id='floatingTextarea'></textarea>"
            . "<label for='floatingTextarea'>Comentario</label>"
            . "</div><br>"
            . "<input name='idmusica' value='$id_c' hidden>"
            . "<button id='comentar' onclick='window.location.href = 'www.google.com'' type='button' class='btn btn-dark'>Enviar Comentario</button>";
    } else {

        $id_ci = mysqli_query($conexao, "select id_cifra from cifra where fk_musica = '$id_cifra';");

        while ($c4 = mysqli_fetch_assoc($id_ci)) {
            $id_c = $c4["id_cifra"];
        }

        $favorito =
            "<a href='#' style='cursor:default;text-decoration:none;color:black' id'favoritar' title='Faça login para adicionar favoritos'>"
            . "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-bookmark-star-fill' viewBox='0 0 16 16'>"
            . "<path fill-rule='evenodd' d='M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z' />"
            . "</svg> Favoritar Cifra</a><br>";

        $comentariosLogado =

            "<div class='form-floating'>"
            . "<textarea name='comentario' class='form-control' title='Você precisa estar logado para fazer comentários' placeholder='Escreva seu comentario' id='floatingTextarea' disabled></textarea>"
            . "<label for='floatingTextarea'>Comentario</label>"
            . "</div><br>"
            . "<input name='idmusica' value='$id_c' hidden disabled>"
            . "<button type='button' class='btn btn-dark'>Enviar Comentario</button>";
    }
} else {
    echo "Erro";
}

?>