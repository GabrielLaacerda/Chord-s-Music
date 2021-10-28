<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    include('../controller/carregarCifra.php');
    ?>
    <title><?php echo $varTitulo ?></title>

    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../View/css/musicas.css">
    <link rel="stylesheet" type="text/css" href="../View/css/datatables.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>

<body>
    <?php
    include('../View/navbar.php');
    include('../View/footer.php');
    ?>

    <header id="barramenu">
        <?php
        echo $nav;
        ?>
    </header><br>

    <div class="container-fluid" id="containermusicas1">
        <div class="cifra">
            <div class="container-fluid" id="containermusicas2">
                <br>

                <h2 class="Titulo"><?php echo $varTitulo ?></h2><br>
                Dificuldade: <span><?php echo $varDificuldade ?></span><br>
                Afinação: <span><?php echo $varAfinacao ?></span><br>
                Capotraste: <span><?php echo $varCapotraste ?></span><br>
                Tom: <span><?php echo $varTom ?></span><br><br>

                <!-- Favoritar Cifra-->
                <?php
                echo $favorito;
                ?>

                <!-- Baixar Cifra -->
                <a href="#" id="baixar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-download-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.5a.5.5 0 0 1 1 0V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0zm-.354 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V11h-1v3.293l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z" />
                    </svg> Baixar Cifra</a>
                <br>

        

                <div class="embed-responsive" id="video">
                    <iframe class="embed-responsive-item" id="video" width="340" height="195" src="<?php echo "https://www.youtube.com/embed/" . $varLink ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>

                <hr id="hr1" size=3>

                <?php echo $br ?>
                <pre id="precifra" style="font-size:17px"><?php echo $varCifra ?></pre>
                <hr size="3" width="98%">

                <div class="container-fluid esc">
                    <center>
                        <p class="lead">
                            Versões Alternativas
                        </p>
                    </center>
                </div>
                <div class="col-md-12 esc">
                    <table id="table_id1" class="display">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Musica / Artista</th>
                                <th>Afinação</th>
                                <th>Capotraste</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $altern = mysqli_query($conexao, "select * from cifra where status = 'Aprovado'
                                 and tipo_Cifra = 'alternativa' and fk_musica = '$id_cifra';");

                            while ($f = mysqli_fetch_assoc($altern)) {
                                $id = $f["id_cifra"];
                                $music = $f["titulo"];
                                $afina = $f["afinacao"];
                                $capo = $f["capotraste"];

                                echo
                                "<tr>"
                                    . "<td>$id</td>"
                                    . "<td>$music</td>"
                                    . "<td>$afina</td>"
                                    . "<td>$capo</td>"
                                    . "</a>"
                                    . "</tr>";
                            }

                            ?>
                        </tbody>
                    </table>
                </div><br>
            </div>
        </div><br>
    </div>


    <div id="comentarios" class="container-fluid d-flex justify-content-center mb-100">
        <div class="row" id="rowcomentario">
            <div class="col-md-12">
                <div class="card" id="cardcomentario">
                    <div class="card-body">
                        <h4 class="card-title">Escreva um Comentario</h4>

                        <form id="formComentarios" method="POST">
                            <?php echo $comentariosLogado ?>
                        </form>
                    </div>

                    <div class="card-body">
                        <h4 class="card-title">Comentários Recentes</h4>
                        <h6 class="card-subtitle">Ultimos comentarios de usuarios da sessão</h6><br>

                        <div class="comment-text w-100">

                            <?php

                            $printar = mysqli_query($conexao, "select usuario.nome, comentarios.createAt, comentarios.comentario from comentarios join usuario
                            on comentarios.fk_id_usuario = usuario.id_usuario where fk_id_cifra = '$id_c';");

                            while ($p = mysqli_fetch_assoc($printar)) {
                                $nome = $p["nome"];
                                $data = $p["createAt"];
                                $comentario = $p["comentario"];

                                echo

                                "<h5>$nome</h5>"
                                    . "<div class='comment-footer'> <span class='date' style='font-size:14px'>$data</span><span class='action-icons'> <a href='#' data-abc='true'><i class='fa fa-pencil'></i></a> <a href='#' data-abc='true'><i class='fa fa-rotate-right'></i></a> <a href='#' data-abc='true'><i class='fa fa-heart'></i></a> </span> </div>"
                                    . "<p class='m-b-5 m-t-10'>$comentario</p>"
                                    . "<hr id='hr2' size='3'>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="foot">
        <?php
        echo $foot;
        ?>

    </div>

    <script src="../View/js/jquery-3.6.0.min.js"></script>
    <script src="../View/js/baixarCifra.js"></script>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../View/js/AjaxComentarios.js"></script>
    <script src="js/datatables.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(document).ready(function() {

            $('#table_id1').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
                }
            });

            $("#datepicker").datepicker();
            $('#table_id1').DataTable();
        })
    </script>

</body>

</html>