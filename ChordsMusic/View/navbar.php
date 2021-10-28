<?php

echo "<link rel='stylesheet' type='text/css' href='../View/css/navbar.css'/>";

if (!isset( $_SESSION ) ) 
{ 
    session_start();
}

include('../controller/connBD.php');

$form = "";
$ativar = "";
$adicionarMusica = "";

if(isset($_SESSION['email'])){

    $ativar = "<a class='nav-link active' aria-current='page' href='../View/Favoritos.php'>Favoritos</a>";
    $email = $_SESSION['email'];
    $administrador = mysqli_query($conexao,"select fk_perfil from usuario where email = '$email';");

    while ($id_admin = mysqli_fetch_assoc($administrador)) {
        $id = $id_admin["fk_perfil"];
    }

    if($id == 1){
        $adicionarMusica =  
        "<li class='nav-item'>"
        ."<a class='nav-link active' aria-current='page' href='../View/AdicionarMusica.php'>Adicionar Musica</a>"
        ."</li>";
    }

    $form = 

    "<form action='../controller/logout.php' method='POST' class='px-4 py-3'>"
    ."<center>"
    ."<a id='aperfilusuario' href='../View/PerfilUsuario.php' >"
    ."<svg xmlns='http://www.w3.org/2000/svg' width='80' height='80' fill='currentColor' class='bi bi-person-circle' viewBox='0 0 16 16'>"
    ."<path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'/>"
    ."<path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z'/>"
    ."</svg>"."</a>"."<center>"
    ."<br>"
    ."<a id='aperfilusuario2' href='../View/PerfilUsuario.php'><button id='buttonperfil' type='button' class='btn btn-dark btn-sm'>Ver Perfil</button></a>"
         ."<br>"."<br>"
         ."<button type='submit' class='btn btn-danger btn-sm' id='buttonsair' >Sair</button><i class='fa fa-sign-out' aria-hidden='true'></i>"
    . "</form>"
     ."<div class='dropdown-divider'></div>";

}else{

    $ativar = "<a class='nav-link disable' aria-current='page'style='cursor:default' title='Faça login para acessar seus favoritos'>Favoritos</a>";

    $form = "<form method='POST' action='../controller/logarUsuario.php' class='px-4 py-3'>"
    . "<div class='form-group'>"
        . "<label for='exampleDropdownFormEmail1'>Endereço de email</label>"
        ."<input type='email' name='email' class='form-control' id='exampleDropdownFormEmail1' placeholder='email@exemplo.com' required>"
        . "</div>"
        . "<div class='form-group'>"
        .     "<label for='exampleDropdownFormPassword1'>Senha</label>"
        ."<input type='password' name='senha' class='form-control' id='exampleDropdownFormPassword1' placeholder='Senha' required>"
        ."</div>"."<br>"

        ."<button type='submit' class='btn btn-dark'>Entrar</button>"
        ."</form>"
        ."<div class='dropdown-divider'></div>"
        ."<a class='dropdown-item' href='../View/CadastrarUsuario.php'>Novo, por aqui? Regitre-se.</a>"
        ."</form>";
}

    $nav = 
     "<nav class='navbar fixed-top navbar-expand-lg navbar-light bg-light'>"
      .  "<div class='container-fluid'>"
           . "<button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarTogglerDemo01' aria-controls='navbarTogglerDemo01' aria-expanded='false' aria-label='Toggle navigation'>"
              .  "<span class='navbar-toggler-icon'></span>"
            . "</button>"
            . "<div class='Logo'>"
               . "<img id='logoPrincipal' class='img-responsive img-fluid' src='../Imagens/LogoSite.png'>"
            . "</div>"
            . "<div class='collapse navbar-collapse' id='navbarTogglerDemo01'>"
               .  "<a class='navbar-brand' href='../View/index.php'>Chord's Music</a>"
                . "<ul class='navbar-nav me-auto mb-2 mb-lg-0'>"
                   .  "<li class='nav-item'>"
                       . "<a class='nav-link active' aria-current='page' href='../View/index.php'>Home</a>"
                  .  "</li>"
                  .  "<li class='nav-item'>"
                      .  $ativar
                  . "</li>"
                   . "<li class='nav-item'>"
                       . "<a class='nav-link active' href='../View/EnviarCifra.php'>Enviar Cifra</a>"
                   . "</li>"
                   . "<li class='nav-item dropdown'>"
                        . "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                            Estilos Musicais
                        </a>"
                       . "<ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>"
                           . "<li><a class='dropdown-item' href='../View/EstilosMusicais.php?id=1'>Pop</a></li>"
                        . "<li><a class='dropdown-item' href='../View/EstilosMusicais.php?id=2'>Reggae</a></li>"
                           . "<li><a class='dropdown-item' href='../View/EstilosMusicais.php?id=3'>Rock</a></li>"
                           . "<li><a class='dropdown-item' href='../View/EstilosMusicais.php?id=4'>MPB</a></li>"
                           . "<li><a class='dropdown-item' href='../View/EstilosMusicais.php?id=5'>Gospel</a></li>"
                           . "<li><a class='dropdown-item' href='../View/EstilosMusicais.php?id=6'>Sertanejo</a></li>"
                           . "<li><a class='dropdown-item' href='../View/EstilosMusicais.php?id=7'> Indie </a></li>"
                           . "<li><a class='dropdown-item' href='../View/EstilosMusicais.php?id=8'> Alternativo </a></li>"
                        . "</ul>"
                   . "</li>"
                   .$adicionarMusica

               . "</ul>"

                ."<div class='nav-item dropdown'>"
                   . "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-bs-toggle='dropdown' aria-expanded='false' style='color:black'>"
                       ." <svg xmlns='http://www.w3.org/2000/svg' width='35' height='35' fill='currentColor' class='bi bi-person-circle' viewBox='0 0 16 16'>"
                      . "<path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z' />"
                      . "<path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z' />"
                       . "</svg>"
                   . "</a>"
                   . "<ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink' style='margin-top:8px;'>"
                       . "<li>"
                        .$form
                       . "</li>"
                    ."</ul>"
                ."</div>"

                ."<form class='d-flex ab'>"
                 .   "<input class='form-control me-2' type='search' placeholder='O que vai aprender hoje ?' aria-label='Search'>"
                  .  "<button class='btn btn-outline-dark' type='submit'>Buscar</button>"
               . "</form>"
            ."</div>"
       . "</div>"
    ."</nav>";

?>