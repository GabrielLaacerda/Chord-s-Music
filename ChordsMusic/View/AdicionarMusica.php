<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Musica</title>
    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../View/css/adicionarmusica.css">
</head>

<body>

    <!-- Barra de navegação e Footer -->
    <?php
        include('../View/navbar.php');
        include('../View/footer.php');
    ?>

    <header id="barramenu">
        <?php echo $nav;?>
    </header>

    <div class="container" id="perfil">
        <form id="addMusica" method="POST">
            <div class="row">
                <div class="col-md-3">
                    <div class="contact-info">
                        <center><svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="currentColor" class="bi bi-file-music" viewBox="0 0 16 16">
                                <path d="M10.304 3.13a1 1 0 0 1 1.196.98v1.8l-2.5.5v5.09c0 .495-.301.883-.662 1.123C7.974 12.866 7.499 13 7 13c-.5 0-.974-.134-1.338-.377-.36-.24-.662-.628-.662-1.123s.301-.883.662-1.123C6.026 10.134 6.501 10 7 10c.356 0 .7.068 1 .196V4.41a1 1 0 0 1 .804-.98l1.5-.3z" />
                                <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                            </svg></center><br>
                        <center>
                            <h2>Adicionar Musicas</h2>
                        </center>
                    </div>
                </div>
                <div class="col-md-9" id="cadastrar">
                    <div class="contact-form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="fnome">Nome da Musica:</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="musica" placeholder="Nome da Musica" name="nomemusica" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="lname">Nome do Artista</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="banda" placeholder="Nome da banda/cantor" name="nomebanda" required>
                            </div>
                        </div>
                        <label class="control-label col-sm-2" for="">Link da Musica</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="linkmusica" placeholder="Link da musica" maxlength = "11" minglength="11" name="linkmusica" required>
                        </div> <br>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button id="botaoAdicionar" maxlenght="11" type="submit" class="btn btn-dark">Enviar Musica</button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>

    </div><br><br>


    <div class="foot">
        <?php
        echo $foot;
        ?>
    </div>

    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../View/js/jquery-3.6.0.min.js"></script>
    <script src="../View/js/AjaxAdicionarMusica.js"></script>


</body>

</html>