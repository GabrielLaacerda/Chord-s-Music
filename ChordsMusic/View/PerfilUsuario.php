<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../View/css/PerfilUsuario.css">
</head>

<body>
    <?php
    include('../View/navbar.php');
    include('../View/footer.php');
    include('../controller/UsuarioPerfil.php');
    ?>
    <header id="barramenu">
        <?php
        echo $nav;
        ?>
    </header><br><br>

    <div id="perfil" class="container emp-profile">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img id="image" class="img-fluid" src="../Imagens/user.png" alt=""/>
                    <input id="botaoEdit" type="submit" class="btn btn-outline-info" name="btnAddMore" value="Editar Perfil"/>
                </div>
            </div>
            <div class="container-fluid col-md-8" id="descperfil"><br><br>
                <div class="container-fluid tab-content profile-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>ID de usuario</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $id ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Nome</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $nome ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $email ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Celular</label>
                            </div>
                            <div class="col-md-6">
                                <p>(XX) XXXXXXXX</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <div id="modificar" class="container">
        <div><br>
            <h3 id="h31">Atualize suas informações abaixo</h3><br>

            <form id="formAlterar" method="POST" action="../controller/alterarUsuario.php">
                <div class="form-group" >
                    <label for="exampleInputNome">Nome:</label>
                    <input type="text" name="nome" class="form-control" id="exampleInputNome" aria-describedby="emailHelp" placeholder="Nome" required>
                </div>
                <div class="form-group" >
                    <label for="exampleInputSenha">Senha</label>
                    <input type="password" name="senha" class="form-control" id="exampleInputSenha" placeholder="Senha" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail" title="Não é possivel alterar o email" placeholder="Email" disabled>
                </div><br>
                <button id="enviar" type="submit" class="btn btn-success" >Salvar</button>
                <button id="cancelar" type="button" class="btn btn-dark" >Voltar</button>
                <button id="excluir" type="button" class="btn btn-danger" value="<?php echo $id ?>">Excluir Conta</button>
            </form>
        </div><br>
    </div>
    <br><br>
    <div class="foot">
        <?php
        echo $foot;
        ?>
    </div>

    <script src="../View/js/jquery-3.6.0.min.js"></script>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../View/js/AjaxDivPerfil.js"></script>

</body>

</html>