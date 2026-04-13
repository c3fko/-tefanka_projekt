<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Stručné privítanie do sveta parkouru">
  <meta name="keywords" content="HTML, CSS, Bootstrap, Web, Projekt">
  <meta name="author" content="Richard">
  <title>Parkour & Freerunning - Kontakt</title>

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

<!-- Pole s kontaktmi -->
  <section class="contacts-section py-5" id="contact">
    <div class="container">
      <h2 class="text-center mb-5 mt-5">Kontakt</h2>
      <form id="contactForm" class="mx-auto" style="max-width: 500px" novalidate>
        <div class="mb-3">
          <label for="meno" class="form-label">Meno</label>
          <input type="text" id="meno" class="form-control" placeholder="Zadajte svoje meno" required>
          <div class="invalid-feedback">Prosím, zadajte svoje meno.</div>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" id="email" class="form-control" placeholder="Zadajte svoj email" required>
          <div class="invalid-feedback">Prosím, zadajte platnú emailovú adresu.</div>
        </div>
        <div class="mb-3">
          <label for="sprava" class="form-label">Správa</label>
          <textarea id="sprava" rows="4" class="form-control" placeholder="Vaša správa..." required></textarea>
          <div class="invalid-feedback">Prosím, napíšte správu.</div>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" id="suhlas" required>
          <label class="form-check-label" for="suhlas">
            Súhlasím so spracovaním osobných údajov
          </label>
          <div class="invalid-feedback">Musíte súhlasiť so spracovaním údajov.</div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-dark px-4">Odoslať</button>
        </div>
      </form>
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