$("#modificar").hide();

$(document).ready(function () {

    $("#botaoEdit").click(function () {
        $("#perfil").hide();
        $("#modificar").show();
    });

    $("#cancelar").click(function () {
        $("#perfil").show();
        $("#modificar").hide();
    });

    $("#excluir").click(function (event) {
        event.preventDefault();

        var $iduser = $(this).val();

       $.ajax({

            method: "POST",
            url: "../controller/deletarUsuario.php",
            data: {id :$iduser},
            success: function (retorno) {
                alert("Conta Excluida com Sucesso");
                window.location.href = '../View/index.php';
            },
            error: function (errorMessage) {
                alert("Não foi possivel excluir sua conta");
            }
        });

    });

});