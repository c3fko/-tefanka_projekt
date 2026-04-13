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
        <img src="img/comumunity.png" alt="Parkour komunita" class="img-fluid rounded w-75">
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