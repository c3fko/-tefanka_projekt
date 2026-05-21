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
  <?php
include_once "classes/qna.php";
use otazkyodpovede\QnA;

$qna = new QnA();
$qna->insertQnA(); 
$faqs = $qna->getQnA();
?>

<h2 class="text-center mt-5 mb-4">Často kladené otázky</h2>
<div class="accordion custom-accordion mx-auto" id="faqAccordion">

    <?php if (!empty($faqs)): ?>
        <?php foreach ($faqs as $index => $faq): 
            $isFirst = ($index === 0);
            
            $headingId = "heading" . $index;
            $collapseId = "collapse" . $index;
            
            $isLast = ($index === count($faqs) - 1);
        ?>
            <div class="accordion-item <?php echo $isLast ? 'mb-5' : ''; ?>">
                <h2 class="accordion-header" id="<?php echo $headingId; ?>">
                    <button class="accordion-button <?php echo $isFirst ? '' : 'collapsed'; ?>" 
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#<?php echo $collapseId; ?>" 
                            aria-expanded="<?php echo $isFirst ? 'true' : 'false'; ?>" 
                            aria-controls="<?php echo $collapseId; ?>">
                        
                        <?php echo htmlspecialchars($faq['otazka']); ?>
                        
                    </button>
                </h2>
                <div id="<?php echo $collapseId; ?>" 
                     class="accordion-collapse collapse <?php echo $isFirst ? 'show' : ''; ?>" 
                     aria-labelledby="<?php echo $headingId; ?>" 
                     data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        
                        <?php echo htmlspecialchars($faq['odpoved']); ?>
                        
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="text-center">Momentálne tu nie sú žiadne otázky.</p>
    <?php endif; ?>

</div>

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