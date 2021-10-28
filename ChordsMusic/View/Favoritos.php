<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favoritos</title>

    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../View/css/favoritos.css">

</head>

<body>
    <header id="barramenu">
        <?php
        include('../View/navbar.php');
        echo $nav;
        ?>

    </header><br><br>

    <div class="container mt-5" id="containerfavoritos">
        <h2>Seus Favoritos</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="mt-3">
                    <ul class="list list-inline">
                        <?php
                        
                        include('../controller/connBD.php');
                       

                        $id_user = "";

                        if ($conexao) {

                            if (isset($_SESSION['email'])) {
                                $email = $_SESSION['email'];
                                $id = mysqli_query($conexao, "select id_usuario from usuario where email = '$email';");

                                while ($id_usuario = mysqli_fetch_assoc($id)) {
                                    $id_user = $id_usuario["id_usuario"];
                                }
                            }

                            $busca = mysqli_query($conexao, "select cifra.titulo, cifra.fk_musica,favoritos.createAt from favoritos join cifra on 
                        favoritos.fk_id_cifra = cifra.id_cifra where favoritos.fk_id_usuario = '$id_user' order by favoritos.createAt desc; ");

                            while ($name = mysqli_fetch_assoc($busca)) {
                                $nomemusica = $name["titulo"];
                                $fk_music = $name["fk_musica"];
                                $data = $name["createAt"];

                                echo

                                "<div class='container-fluid w-100'>"
                                    . "<a id='afavoritos' href='../View/Musicas.php?id=$fk_music'>"
                                    . "<li class='d-flex justify-content-between'>"
                                    . "<div class='d-flex flex-row align-items-center'><i class='fa fa-check-circle checkicon'></i>"
                                    . " <div class='ml-2'>"
                                    . "<h6 class='mb-0'>$nomemusica</h6>"
                                    . " <div class='d-flex flex-row mt-1 text-black-50 date-time'>"
                                    . "<div><i class='fa fa-calendar-o'></i><span class='ml-2'>Favoritada em: $data</span></div>"
                                    . "</div>"
                                    . "</div>"
                                    . "</div>"
                                    . "</li>"
                                    . "</a>"
                                    . "<form id='removeFavorito' action='../controller/removerFavorito.php?id=$fk_music' method='POST'>"
                                    . "<button type='submit' name='remover' class='btn btn-danger' >Excluir</button>"
                                    . "</form>"
                                    . "</div>";
                            }
                        } else {
                            echo "Erro";
                        }

                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="foot">
        <?php
        include('../View/footer.php');
        echo $foot;
        ?>
    </div>

    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../View/js/jquery-3.6.0.min.js"></script>

</body>

</html>