<style>
    .list-group :hover{
        background-color: #292929;
        color:white;
    }
</style>

<?php

include('../controller/connBD.php');
        
        if ($conexao) {

            $id_cat = $_GET["id"];
            $nome_categoria = mysqli_query($conexao, "select nome from categorias where id_categoria = '$id_cat';");

            while ($nomecategoria = mysqli_fetch_assoc($nome_categoria)) {
                $n = $nomecategoria["nome"];
            }

            echo "<p class='maisAcessadas' style='margin-left:30px'>$n</p>";
            $Categorias = mysqli_query($conexao, "select titulo,fk_musica from cifra where categoria ='$id_cat' and tipo_cifra='original';");

            while ($name = mysqli_fetch_assoc($Categorias)) {

                $varTitulo = $name["titulo"];
                $varId = $name["fk_musica"];

                echo

                "<div class='list-group list-group-horizontal' style='border-radius:10px;width:96%;margin:0 auto;margin-top:6px'>"
                    . "<a href='../View/Musicas.php?id=$varId' class='list-group-item list-group-item-action' aria-current='true'>"
                    . "<div class='d-flex w-100 justify-content-between'>"
                    . "<h5 class='mb-1' style='width:97%'>$varTitulo</h5>"
                    . "</div>"
                    . "<p class='mb-1'>Clique para acessar a cifra</p>"
                    . "<div class='icon' style='float: right;margin-top:-55px'>"
                    . "<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40' fill='currentColor' class='bi bi-music-note-list' viewBox='0 0 16 16'>"
                    . "<path d='M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z' />"
                    . "<path fill-rule='evenodd' d='M12 3v10h-1V3h1z' />"
                    . "<path d='M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z' />"
                    . "<path fill-rule='evenodd' d='M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z' />"
                    . "</svg>"
                    . "</div>"
                    . "</a>"
                    . "</div>";
            }
            echo "<br><br><br>";
        } else {
            echo "Erro";
        }
 ?>