<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header>
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
          
          <li class="nav-item">
            <a class="nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>" href="index.php">Domov</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?= ($current_page == 'o_nas.php') ? 'active' : '' ?>" href="o_nas.php">O nás</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?= ($current_page == 'gallery.php') ? 'active' : '' ?>" href="gallery.php">Galéria</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?= ($current_page == 'contacts.php') ? 'active' : '' ?>" href="contacts.php">Kontakt</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</header>