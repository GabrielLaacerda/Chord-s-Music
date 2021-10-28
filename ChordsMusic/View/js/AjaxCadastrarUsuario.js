$(document).ready(function () {

    $("#botaoCadastrar").click(function (event) {
        event.preventDefault();

        var $email2= $("input[name=email2]").val();
        var $nome2 = $("input[name=nome2]").val();
        var $senha2 = $("input[name=senha2]").val();
        var $Invalido = "";

        if ($email2 == "" || $nome2 == "" || $senha2 == "") {
        
            $Invalido = $('<div class="alert alert-danger" role="alert">Preencha todos os campos</div>');
          
            if ($(".alert").length) {
                $(".alert").remove();

                $("#al").append($Invalido);

            } else {

                $("#al").append($Invalido);
            }

        }
        else{

        $.ajax({
            method: "POST",
            url: "../controller/cadastrar.php",
            data: $('#formCadastro').serialize(),
            success: function (retorno) {
                
                if ($(".alert").length) {
                    $(".alert").remove();
                }
                $Invalido = $('<div class="alert alert-success" role="alert">Cadastro feito com sucesso</div>');

                $("#al").append($Invalido);
                $('input').val("");
            },
            error: function (errorMessage) {
                if ($(".alert").length) {
                    $(".alert").remove();
                }

                $Invalido = $('<div class="alert alert-danger" role="alert">Erro no Cadastro</div>');

                $("#al").append($Invalido);
            }
        });
        $('input').val("");
    }

    });

});