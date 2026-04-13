<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Stručné privítanie do sveta parkouru">
  <meta name="keywords" content="HTML, CSS, Bootstrap, Web, Projekt">
  <meta name="author" content="Richard">
  <title>Parkour & Freerunning - Domov</title>

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

  <!-- Banner s textom -->
  <header class="banner text-white text-center d-flex align-items-center justify-content-center">
    <div class="container">
      <h1 class="display-4">Čo to je Parkour & Freerunning?!</h1>
      <p class="lead mb-0">Presne to sa dozviete na našej stránke</p>
    </div>
  </header>

  <!-- Akordeón -->
  <h2 class="text-center mt-5 mb-4">Často kladené otázky</h2>
  <div class="accordion custom-accordion mx-auto" id="faqAccordion">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#q1" aria-expanded="false" aria-controls="q1">
          Čo je to Parkour / Freerunning?
        </button>
      </h2>
      <div id="q1" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Parkour je pohybová disciplína, pri ktorej sa človek snaží čo najplynulejšie a najpraktickejšie prekonávať prekážky – skákaním, preskokmi, lezením či behom, aby sa dostal z miesta na miesto rýchlo a kontrolovane.  

          Freerunning je jeho „kreatívnejšia verzia“, kde sa k prekonávaniu prekážok pridáva akrobacia, estetika a osobitý štýl, takže pohyb vyzerá dynamicky a zaujímavo.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q2" aria-expanded="false" aria-controls="q2">
          Môžem sa tomu venovať aj ja?
        </button>
      </h2>
      <div id="q2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Áno, môžeš sa tomu venovať aj ty – parkour aj freerunning sú otvorené pre každého, bez ohľadu na vek či skúsenosti.  

          Stačí začať pomaly, učiť sa základné techniky (dopady, preskoky, balans) a postupne naberať silu aj istotu.  

          Je to o postupnom zlepšovaní, nie o tom urobiť saltá hneď prvý deň.
        </div>
      </div>
    </div>

    <div class="accordion-item mb-5">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q3" aria-expanded="false" aria-controls="q3">
          Je to nebezpečné?
        </button>
      </h2>
      <div id="q3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Áno aj nie. Parkour a freerunning môžu byť nebezpečné, ak sa robia bez rozumu, bez základov alebo sa skáče na úrovni, na ktorú človek ešte nemá.  

          Ale ak začneš pomaly, trénuješ základné dopady, techniku a silu, vyberáš si primerané prekážky a postupuješ krok za krokom, úrazu sa báť nemusíš.
        </div>
      </div>
    </div>
  </div>

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