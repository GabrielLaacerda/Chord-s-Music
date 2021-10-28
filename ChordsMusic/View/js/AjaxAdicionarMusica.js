$(document).ready(function () {

    $("#botaoAdicionar").click(function (event) {
        event.preventDefault();

        var $Invalido = "";
        var $Nome = $("input[name=nomemusica]").val();
        var $Nome2 = $("input[name=nomebanda]").val();
        var $Link = $("input[name=linkmusica]").val();


        if ($Nome == '' || $Nome2 == '' || $Link == '') {
            var $Invalido = $('<div class="alert alert-danger" role="alert" style="margin-top:2%">Preencha todos os campos</div>');

            if ($(".alert").length) {
                $(".alert").remove();

                $("#cadastrar").append($Invalido);

            } else {

                $("#cadastrar").append($Invalido);
            }
        }
        else{

        $.ajax({
            method: "POST",
            url: "../controller/adicionarMusica.php",
            data: $('#addMusica').serialize(),
            success: function (retorno) {

                if ($(".alert").length) {
                    $(".alert").remove();
                }

                $("#cadastrar").append(retorno);
                $('#addMusica input').val("");
            },
            error: function (errorMessage) {
                if ($(".alert").length) {
                    $(".alert").remove();
                }

                $("#cadastrar").append(retorno);
            }
        });
    }


    });

});