<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chord's Music</title>

    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../View/css/main.css">
</head>

<body>

    <?php
    include('../View/footer.php');
    include('../View/navbar.php');
    ?>

    <header id="barramenu">
        <?php
        echo $nav;
        ?>
    </header>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../Imagens/carrossel3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item ">
                <a href="../View/EnviarCifra.php"><img src="../Imagens/carrossel1.jpg" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="../View/EstilosMusicais.php?id=3"><img src="../Imagens/carrossel2.jpg" class="d-block w-100" alt="..."></a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>
    <br>

    <div class="container-fluid">
        <p class="maisAcessadas">Novidades</p>
        <?php include('../controller/MusicasIndex.php'); ?>
    </div><br>
    </div>

    <p class="novidades" >Mais Acessadas</p>
    <div class="container-fluid" id="containermain">
        <div class="row row-cols-1 row-cols-md-5 g-12">
            <div class="col">
                <div class="card h-100">
                    <a href="../View/Musicas.php?id=1"><img id="capadvd" src="../Imagens/blinds.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">BLINDING LIGHTS</h5>
                        <p class="card-text">Artista: The Weeknd<br>
                            Álbum: After Hours (Deluxe)<br>
                            Ano de lançamento: 2020<br>
                            Genero: Alternative R&B, Pop</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Data de upload : 25/03/2021</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="../View/Musicas.php?id=8"><img id="capadvd" src="../Imagens/wish.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Wish You Were Here</h5>
                        <p class="card-text">Artista: Pink Floyd <br>
                            Album: Wish You Were Here <br>
                            Ano de lançamento: 1975 <br>
                            Genero: Progressive rock, Pop</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Data de upload : 25/03/2021</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="../View/Musicas.php?id=9"><img id="capadvd" src="../Imagens/radiohead.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Karma Police</h5>
                        <p class="card-text">Artista: Radiohead<br>
                            Album: OK Computer<br>
                            Ano de lançamento: 1997 <br>
                            Genero: Alternative/Indie</p>
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Data de upload : 25/03/2021</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="../View/Musicas.php?id=10"><img id="capadvd" src="../Imagens/baby.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Baby Shark Dance</h5>
                        <p class="card-text">Artista: Pinkfong <br>
                            Album: Pinkfong Animal Songs <br>
                            Ano de lançamento: 2016 <br>
                            Genero: Pop</p>
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Data de upload : 25/03/2021</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="../View/Musicas.php?id=11"><img id="capadvd" src="../Imagens/sunflower.jpg" class="card-img-top " alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Sunflower</h5>
                        <p class="card-text">Artista: Post Malone <br>
                            Album: Spider-Man: Into the Spider-Verse <br>
                            Ano de lançamento: 2018 <br>
                            Genero: Pop music, Hip-Hop/Rap</p>
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Data de upload : 25/03/2021</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <div class="foot">
        <?php
        echo $foot;
        ?>
    </div>

    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../View/js/jquery-3.6.0.min.js"></script>
    <script src="../View/js/index.js"></script>

</body>

</html>