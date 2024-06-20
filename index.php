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
            <a class="nav-link active" href="faleconosco.php">Fale Conosco</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Games
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="badboy.php">BadBoy in a Dreamland</a></li>
              <li><a class="dropdown-item" href="jogo2.php">Jogo2</a></li>
              <li><a class="dropdown-item" href="jogo3.php">Jogo3</a></li>
              <li><a class="dropdown-item" href="jogo4.php">Jogo4</a></li>
              <li><a class="dropdown-item" href="jogo5.php">Jogo5</a></li>
              <li><a class="dropdown-item" href="jogo6.php">Jogo6</a></li>
            </ul>
          </li>
      </div>
    </div>
  </nav>
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Imagens/Destiny.webp" class="d-block w-100" alt="Jogo">
      </div>
      <div class="carousel-item">
        <img src="Imagens/Carro.jpg" class="d-block w-100" alt="Jogo">
      </div>
      <div class="carousel-item">
        <img src="Imagens/Iki.webp" class="d-block w-100" alt="Jogo">
      </div>
      <div class="carousel-item">
        <img src="Imagens/Logojogo2.jpg" class="d-block w-100" alt="Jogo">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container">
    <h1 class="text-center text-uppercase">Melhores Games</h1>
    <div class="row">
      <div class="col-12 col-md-4">
        <div class="card text-center mb-3" data-aos="fade-down-right">
          <img src="Imagens/Badboy in a wasteland.png" class="card-img-top" alt="BadBoy in a Dreamland" id="image-card">
          <div class="card-body">
            <div class="text-center">
              <h5 class="card-title text-uppercase">BadBoy in a Dreamland</h5>
              <a href="badboy.php" class="btn btn-info text-uppercase"><i class="fa-solid fa-circle-info"></i>Info</a>
              <a href="jbadboy.php" class="btn btn-success text-uppercase"><i class="fa-solid fa-play"></i>Jogar</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card text-center mb-3" data-aos="fade-down">
          <img src="Imagens/Card2.jpg" class="card-img-top" alt="Jogo2" id="image-card">
          <div class="card-body">
            <h5 class="card-title text-uppercase">Jogo2</h5>
            <a href="jogo2.php" class="btn btn-info text-uppercase"><i class="fa-solid fa-circle-info"></i>Info</a>
            <a href="jjogo2.php" class="btn btn-success text-uppercase"><i class="fa-solid fa-play"></i>Jogar</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card text-center mb-3" data-aos="fade-down-left">
          <img src="Imagens/Card3.webp" class="card-img-top" alt="Jogo3" id="image-card">
          <div class="card-body">
            <h5 class="card-title text-uppercase">Jogo3</h5>
            <a href="jogo3.php" class="btn btn-info text-uppercase"><i class="fa-solid fa-circle-info"></i>Info</a>
            <a href="jjogo.php" class="btn btn-success text-uppercase"><i class="fa-solid fa-play"></i>Jogar</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card text-center mb-3" data-aos="fade-up-right">
          <img src="Imagens/Card4.avif" class="card-img-top" alt="Jogo4" id="image-card">
          <div class="card-body">
            <h5 class="card-title text-uppercase">Jogo4</h5>
            <a href="jogo4.php" class="btn btn-info text-uppercase"><i class="fa-solid fa-circle-info"></i>Info</a>
            <a href="jjogo4.php" class="btn btn-success text-uppercase"><i class="fa-solid fa-play"></i>Jogar</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card text-center mb-3" data-aos="zoom-in">
          <img src="Imagens/Card5.webp" class="card-img-top" alt="Jogo5" id="image-card">
          <div class="card-body">
            <h5 class="card-title text-uppercase">Jogo5</h5>
            <a href="jogo5.php" class="btn btn-info text-uppercase"><i class="fa-solid fa-circle-info"></i>Info</a>
            <a href="jjogo5.php" class="btn btn-success text-uppercase"><i class="fa-solid fa-play"></i>Jogar</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card text-center mb-3" data-aos="fade-up-left">
          <img src="Imagens/Card6.jpeg" class="card-img-top" alt="Jogo6" id="image-card">
          <div class="card-body">
            <h5 class="card-title text-uppercase">Jogo6</h5>
            <a href="jogo6.php" class="btn btn-info text-uppercase"><i class="fa-solid fa-circle-info"></i>Info</a>
            <a href="jjogo6.php" class="btn btn-success text-uppercase"><i class="fa-solid fa-play"></i>Jogar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<footer>
  <p class="text-center bg-secondary">Site desenvolvido por Emanuel Ramos Paiva</p>
  </div>
</footer>
<script src="bootstrap-5.3.3/dist/js/bootstrap.bundle.js"></script>
<script src="https://kit.fontawesome.com/4d675d3e85.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</html>