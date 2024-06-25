<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staim</title>
  <meta name="description" content="Site Staim de Campo Mourão">
  <meta name="keywords" content="steam, staim, jogos, site de jogos">
  <link rel="stylesheet" href="bootstrap-5.3.3/dist/css/bootstrap-grid.css">
  <link rel="stylesheet" href="bootstrap-5.3.3/dist/css/bootstrap.css">
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="shortcut icon" href="Imagens/T-removebg-preview.png">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
  <?php

  $url = "https://vaporstoresite.000webhostapp.com/api/games_originals.php";

  $dadosApi = file_get_contents($url);

  $dadosJogos = json_decode($dadosApi);

  ?>
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="Imagens/T-removebg-preview.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="quemsomos.php">Quem Somos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Games
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="badboy.php">BadBoy in a Dreamland</a></li>
              <li><a class="dropdown-item" href="jogo2.php">Rocket On The Rocks</a></li>
              <li><a class="dropdown-item" href="jogo3.php">Tommy Adventure</a></li>
              <li><a class="dropdown-item" href="jogo4.php">Curse Game</a></li>
            </ul>
          </li>
      </div>
    </div>
  </nav>
  <div class="banner">
    <img src="https://vaporstoresite.000webhostapp.com/img/banners/cowBoy_dream/banner01.jpg" class="w-100">
  </div>
  <div class="text-center text-uppercase">
    <h1>Cowboy in a Dreamland</h1>
    <p>Em um dia nosso herói acorda em uma área devastada pelos mortos vivos.<br>
      Apenas com breves lembranças de seu passado ele define seu destino:<br>
      Salvar a garota que aparece em seus sonhos. Jesterino conseguirá? Ajude nosso herói em sua jornada.<br>
      Nosso herói não sabe se tudo isso é real.</p>
  </div>
  <div class="text-center text-uppercase">
    <h1>Fotos do Game</h1>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-3">
          <img src="https://vaporstoresite.000webhostapp.com/img/banners/cowBoy_dream/screenshot01.jpg" class="card-img-top">
        </div>
        <div class="col-12 col-md-3">
          <img src="https://vaporstoresite.000webhostapp.com/img/banners/cowBoy_dream/screenshot02.jpg" class="card-img-top">
        </div>
        <div class="col-12 col-md-3">
          <img src="https://vaporstoresite.000webhostapp.com/img/banners/cowBoy_dream/screenshot03.jpg" class="card-img-top">
        </div>
        <div class="col-12 col-md-3">
          <img src="https://vaporstoresite.000webhostapp.com/img/banners/cowBoy_dream/screenshot04.jpg" class="card-img-top">
        </div>
      </div>
    </div>
  </div>
  </div>
  <footer class="footer text-center bg-secondary">
    <div class="text-uppercase">
    <p style="color: black;">Site desenvolvido por Emanuel Ramos Paiva</p>
    <a href="https://github.com/SupManel" class="text-decoration-none" style="color: black;">GitHub<i class="fa-brands fa-github"></i></a>
    <a href="https://www.instagram.com/emanuel_r_p/" class="text-decoration-none" style="color: black;"> Instagram <i class="fa-brands fa-instagram"></i></a>
    </div>
  </footer>
</body>
<script src="bootstrap-5.3.3/dist/js/bootstrap.bundle.js"></script>
<script src="https://kit.fontawesome.com/4d675d3e85.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</html>