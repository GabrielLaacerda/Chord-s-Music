<?php
    include('../View/navbar.php');
    include('../View/footer.php');
    include('../controller/UsuarioEnviarCifra.php');
 ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Cifra</title>

    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../View/css/EnviarCifra.css">
</head>

<body>

    <header id="barramenu">
        <?php
        echo $nav;
        ?>
    </header><br><br>

    <div class="container">
        <form id="enviarCifra" method="POST">
            <div class="row">
                <div class="col-md-3">
                    <div class="contact-info">
                        <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image" />
                        <h2>Enviar Cifras</h2>
                        <h4>Mostre-nos a sua criatividade e faça parte da nossa comunidade</h4>
                    </div>
                </div>
                <div class="col-md-9">
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
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Tom:</label>
                            <select name="tomvalue" class="form-select" aria-label="Default select example" required>
                                <option selected value="A">A</option>
                                <option value="Am">Am</option>
                                <option value="Bb">Bb</option>
                                <option value="Bbm">Bbm</option>
                                <option value="B">B</option>
                                <option value="Bm">Bm</option>
                                <option value="C">C</option>
                                <option value="Cm">Cm</option>
                                <option value="C#m">C#m</option>
                                <option value="Db">Db</option>
                                <option value="D">D</option>
                                <option value="Dm">Dm</option>
                                <option value="Ebm">Ebm</option>
                                <option value="Eb">Eb</option>
                                <option value="E">E</option>
                                <option value="Em">Em</option>
                                <option value="F">F</option>
                                <option value="Fm">Fm</option>
                                <option value="F#">F#</option>
                                <option value="F#m">F#m</option>
                                <option value="G">G</option>
                                <option value="Gm">Gm</option>
                                <option value="G#m">G#m</option>
                                <option value="Ab">Ab</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Afinação:</label>
                            <select name="afinacaovalue" class="form-select" aria-label="Default select example">
                                <option selected value="E A D G B E">E A D G B E</option>
                                <option value="Eb Ab Db Gb Bb Eb">Eb Ab Db Gb Bb Eb</option>
                                <option value="D G C F A D">D G C F A D</option>
                                <option value="Db Gb B E Ab Db">Db Gb B E Ab Db</option>
                                <option value="C F Bb Eb G C">C F Bb Eb G C</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Categoria:</label>
                            <select name="categorias" class="form-select" aria-label="Default select example">
                                <option selected value="1">Pop</option>
                                <option value="2">Reggae</option>
                                <option value="3">Rock</option>
                                <option value="4">MPB</option>
                                <option value="5">Gospel</option>
                                <option value="6">Sertanejo</option>
                                <option value="7">Indie</option>
                                 <option value="8">Alternativo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Capotraste:</label>
                            <select name="capotrastevalue" class="form-select" aria-label="Default select example" required>
                                <option selected value="Nao">Nao</option>
                                <option value="Casa 1">Casa 1</option>
                                <option value="Casa 2">Casa 2</option>
                                <option value="Casa 3">Casa 3</option>
                                <option value="Casa 4">Casa 4</option>
                                <option value="Casa 5">Casa 5</option>
                                <option value="Casa 6">Casa 6</option>
                                <option value="Casa 7">Casa 7</option>
                                <option value="Casa 8">Casa 8</option>
                                <option value="Casa 9">Casa 9</option>
                                <option value="Casa 10">Casa 10</option>
                                <option value="Casa 11">Casa 11</option>
                                <option value="Casa 12">Casa 12</option>
                            </select>
                        </div><br>

                        <label class="control-label col-sm-2" for="">Dificuldade:</label>

                        <div name="dificuldade" class="form-check w-50" required>
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="fácil" checked>
                            <label class="form-check-label" for="exampleRadios1">Facil</label><br>
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="intermediario">
                            <label class="form-check-label" for="exampleRadios2">Intermediario</label><br>
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="avançado">
                            <label class="form-check-label" for="exampleRadios3">Avançado</label>
                        </div>

                        <?php echo $status ?>

                        <br>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="comment">Cole aqui a sua Cifra:</label>
                            <div class="col-sm-12">
                                <textarea name="corpocifra" class="form-control" rows="5" required></textarea>
                            </div>
                        </div><br>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button id="botaoCifra" type="button" class="btn btn-dark">Enviar Cifra</button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
    </div>
    <div class="foot">
        <?php
        echo $foot;
        ?>
    </div>

    <script src="../View/js/jquery-3.6.0.min.js"></script>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../View/js/AjaxAdicionarCifra.js"></script>

</body>

</html>