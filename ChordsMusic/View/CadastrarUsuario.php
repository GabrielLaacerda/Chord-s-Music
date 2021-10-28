<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../View/css/CadastrarUsuario.css">

</head>

<body>
    <header id="barramenu">
        <?php
        include('../View/navbar.php');
        echo $nav;
        ?>
    </header><br><br>

    <div class="container px-4 py-5 mx-auto">
        <div class="card card0">
            <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="card card1">
                    <div class="row justify-content-center">
                        <div id="al" class="col-md-8 col-10 my-5">
                            <div class="row justify-content-center px-3 mb-3"> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg> </div>
                            <h3 class="mb-5 text-center heading">Chord's Music</h3>

                            <!-- Formulario -->
                            <form id="formCadastro" method="POST">
                                <h6 class="msg-info">Digite seus dados para o cadastro</h6>
                                <div class="form-group"> <label class="form-control-label text-muted">Email</label> <input type="email" name="email2" placeholder="Email" class="form-control"> </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Nome</label> <input type="text" name="nome2" placeholder="Nome" class="form-control"> </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Senha</label> <input type="password" name="senha2" placeholder="Senha" class="form-control" minlength="8"> </div>
                                <div class="row justify-content-center my-3 px-3"> <button id="botaoCadastrar" type="button" class="btn-block btn-color">Cadastrar-se</button> </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card card2" style="background-image: url('../Imagens/TelaLogin.jpg');">
                    <div class="my-auto mx-md-5 px-md-5 right">
                        <h3 class="text-white"></h3> <small class="text-white"></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../View/js/jquery-3.6.0.min.js"></script>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../View/js/AjaxCadastrarUsuario.js"></script>

</body>

</html>