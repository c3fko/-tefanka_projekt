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
    <?php
  $file_path = "parts/header.php"; 
  if(!include($file_path)) {
    echo"Failed to include $file_path";
  } 
  ?>

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
   <?php
  $file_path = "parts/footer.php"; 
  if(!include($file_path)) {
    echo"Failed to include $file_path";
  } 
  ?>

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