<?php

include('../controller/connBD.php');

if(isset($_SESSION['email'])){

    $email = $_SESSION['email'];
    $administrador = mysqli_query($conexao,"select fk_perfil from usuario where email = '$email';");
    $status="";

    while ($id_admin = mysqli_fetch_assoc($administrador)) {
        $id = $id_admin["fk_perfil"];
    }

    if($id == 1){
        $status =  
        "<br>"
         ."<div class='form-check form-switch'>"
        ."<input class='form-check-input' name='status' type='checkbox' checked>"
        ."<label class='form-check-label' for='flexSwitchCheckChecked'>Original</label>"
        ."</div>";
    }

}else{
    $status = "";
}

?>