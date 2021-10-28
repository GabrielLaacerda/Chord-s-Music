$(document).ready(function() {
    $("#comentar").click(function(event){
     event.preventDefault();
        $.ajax({
            method: "POST",
            url: "../controller/adicionarComentario.php",
            data: $('#formComentarios').serialize(),
            success: function(retorno) {
                alert(retorno);
                location.reload();
            },
            error: function(errorMessage) {
                alert(retorno);
            }
        });
        
        $('#formComentarios textarea').val("");

    });

});