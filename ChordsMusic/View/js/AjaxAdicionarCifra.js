$(document).ready(function () {
    $("#botaoCifra").click(function (event) {

        var $nomemusica = $("input[name=nomemusica]").val();
        var $nomebanda = $("input[name=nomebanda").val();
        var $corpocifra = $("input[name=corpocifra]").val();


        if ($nomemusica == "" || $nomebanda == "" || $corpocifra == "") {
            alert("Preencha todos os campos");
            return;
        }

        event.preventDefault();
        $.ajax({
            method: "POST",
            url: "../controller/cadastrarCifra.php",
            data: $('#enviarCifra').serialize(),
            success: function (retorno) {
                alert("Cifra enviada");
            },
            error: function (retorno) {
                alert("Não foi possivel enviar sua cifra");
            }
        });

        $('input').val("");
        $('textarea').val("");

    });


});