<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Stručné privítanie do sveta parkouru">
  <meta name="keywords" content="HTML, CSS, Bootstrap, Web, Projekt">
  <meta name="author" content="Richard">
  <title>Parkour & Freerunning - Galéria</title>

  <!--Odkaz na font-->
  <link href="https://fonts.googleapis.com/css2?family=Ephesis&family=Pinyon+Script&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vlastné štýly -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- Navigácia -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img src="img/logo.png" alt="Logo stránky" width="40" height="40" class="me-2">
        <span>Parkour & Freerunning</span>
      </a>

      <button class="navbar-toggler" type="button"
              data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Prepínač navigácie">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Domov</a></li>
          <li class="nav-item"><a class="nav-link" href="o_nas.php">O nás</a></li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="gallery.php">Galéria</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="contacts.php">Kontakt</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Slideshow -->
  <section id="gallery" class="container text-center my-5">
    <h2 class="text-center mb-5 mt-5">Galéria</h2>
    <div id="carouselExample" class="carousel slide mb-5 mx-auto" style="max-width: 600px;">
      <div class="carousel-inner rounded">
        <div class="carousel-item active">
          <img src="img/slide1.png" class="d-block w-100 rounded carousel-img" alt="Salto vzad">
        </div>
        <div class="carousel-item">
          <img src="img/slide2.jpg" class="d-block w-100 rounded carousel-img" alt="Preskok cez prekážku">
        </div>
        <div class="carousel-item">
          <img src="img/slide3.jpg" class="d-block w-100 rounded carousel-img" alt="Tri skákajúce osoby">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

    <!-- Citát -->
    <div class="container">
      <blockquote class="blockquote">
        <p>
          „Naším cieľom je priniesť naše umenie svetu a ukázať ľuďom, čo znamená pohyb.“
        </p>
        <footer class="blockquote-footer fs-5">David Belle</footer>
      </blockquote>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white py-4 mt-auto">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <h5>O stránke</h5>
          <p>Stručné privítanie do sveta parkouru</p>
        </div>
        <div class="col-md-4">
          <h5>Kontakt</h5>
          <p>Email: <a href="mailto:parkour@mojastranka.sk" class="text-white">info@mojastranka.sk</a></p>
          <p>Tel: <a href="tel:+421900123456" class="text-white">+421 900 123 456</a></p>
        </div>
        <div class="col-md-4">
          <h5>Rýchle odkazy</h5>
          <ul class="list-unstyled mb-0">
            <li><a href="gallery.php" class="text-white">Galéria</a></li>
            <li><a href="contacts.php" class="text-white">Kontakt</a></li>
          </ul>
        </div>
      </div>
      <div class="text-center mt-3">
        <p class="mb-0">&copy; 2025 Richard Štefanka - Moja stránka</p>
      </div>
    </div>
  </footer>

  <!-- kreatívny bod -->
  <!-- Cookie popup -->
  <div id="cookie-popup" class="cookie-popup">
    <div class="cookie-row">
      <div class="cookie-left">
        <img src="img/cookie.png" alt="Cookie" class="cookie-icon">
        <span class="cookie-label">cookies</span>
      </div>
      <div class="cookie-text">
        Táto stránka používa cookies na zlepšenie používateľského zážitku.
      </div>
    </div>
    <div class="cookie-buttons">
      <button id="accept-cookies" class="btn btn-dark btn-sm btn-light-dark">Súhlasím</button>
      <button id="reject-cookies" class="btn btn-dark btn-sm btn-light-dark">Odmietam</button>
    </div>
  </div>

  <!-- Bootstrap + JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>