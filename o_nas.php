<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Stručné privítanie do sveta parkouru">
  <meta name="keywords" content="HTML, CSS, Bootstrap, Web, Projekt">
  <meta name="author" content="Richard">
  <title>Parkour & Freerunning - O nás</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vlastné štýly -->
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <!-- Navigácia -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="../index.html">
        <img src="../img/logo.png" alt="Logo stránky" width="40" height="40" class="me-2">
        <span>Parkour & Freerunning</span>
      </a>

      <button class="navbar-toggler" type="button"
              data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Prepínač navigácie">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="../index.html">Domov</a></li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../o_nas.html">O nás</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="../gallery.html">Galéria</a></li>
          <li class="nav-item"><a class="nav-link" href="../contacts.html">Kontakt</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Text -->
  <section class="container py-5">
    <h2 class="text-center mb-5 mt-5">O nás</h2>
    <div class="row align-items-center">
      <div class="col-md-6">
        <p class="big-line">
          Sme <strong>komunita</strong> ľudí, ktorí žijú pre pohyb. Parkour a freerunning pre nás nie sú len športy – sú to spôsoby, ako objavovať slobodu, kreativitu a silu vlastného tela.
        </p>

        <p class="big-line">
          Našim cieľom je šíriť radosť z pohybu medzi ľudí. V dnešnej dobe je internet naším najlepším nástrojom, vďaka ktorému môžeme spájať nadšencov z rôznych miest, deliť sa o skúsenosti a inšpirovať sa navzájom.
        </p>

        <p class="big-line">
          Budujeme priestor, kde sa stretáva energia, kreativita a podpora. Nie sme len športovci – sme komunita, ktorá verí, že <strong>pohyb dokáže meniť životy.</strong>
        </p>
      </div>
      <div class="col-md-6 text-center">
        <img src="../img/comumunity.png" alt="Parkour komunita" class="img-fluid rounded w-75">
      </div>
    </div>
    <div class="text-center mt-5 mb-5">
      <a href="https://www.parkourscenaexistuje.sk" class="btn btn-dark">Komunita</a>
    </div>
  </section>

  <section id="o-nas" class="container my-5">
    <h2 class="text-center mb-5 mt-5">Začiatky môžu byť náročné</h2>
    <div class="mx-auto" style="max-width: 800px;">
      <p class="big-line">
        Chápeme, že začať nemusí byť jednoduché pre každého. <strong>Na začiatku je často prítomný strach,</strong> neistota a veľa neznámeho. Preto sme pre vás pripravili rôzne možnosti tréningu, aby ste si našli cestu, ktorá vám najviac vyhovuje:
      </p>
      
      <!-- Zoznam -->
      <ul>
        <li><strong>Samostatne vonku</strong> – pieskovisko</li>
        <li><strong>Doma</strong> – trampolína</li>
        <li><strong>Open gym</strong> – voľný tréning v hale</li>
        <li><strong>Tréningy vedené skúsenými trénermi</strong></li>
      </ul>

      <p class="big-line">
      Áno, aj u nás na Slovensku existujú parkourové telocvične a tréneri, ktorí sa tomu venujú dlhé roky. Preto vám prinášame odkaz na komunitnú platformu a najrozšírenejšiu sieť s mnohými pobočkami – <strong>Skill Lab</strong>, kde nájdete podporu, tréningy a ľudí, ktorí žijú parkourom rovnako ako vy.
      </p>
    </div>

    <!-- Tabuľka -->
    <h2 class="text-center mb-5 mt-5">Skill Lab</h2>
    <div class="table-responsive">
      <table class="table table-bordered text-center align-middle custom-table">
        <thead class="table-dark">
          <tr>
            <th>Programy</th>
            <th>Skupina</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>SuperKids</td>
            <td>4-7 rokov</td>
          </tr>
          <tr>
            <td>Parkour Basic</td>
            <td>začiatočníci (8+)</td>
          </tr>
          <tr>
            <td>Parkour Pro</td>
            <td>mierne pokročilí (8+)</td>
          </tr>
          <tr>
            <td>Parkour Elite</td>
            <td>pokročilí (8+)</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="container my-4">
      <div class="text-center mt-5 mb-5">
        <a href="https://skills.sk" class="btn btn-danger">Skill Lab</a>
      </div>
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
            <li><a href="../gallery.html" class="text-white">Galéria</a></li>
            <li><a href="../contacts.html" class="text-white">Kontakt</a></li>
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
        <img src="../img/cookie.png" alt="Cookie" class="cookie-icon">
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
  <script src="../js/script.js"></script>
</body>
</html>