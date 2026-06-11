<?php
session_start();
if (!isset($_SESSION['admin'])) { header('Location: index.php'); exit; }

require_once('../classes/kontakt.php');
use formular\Kontakt;
$kontakt = new Kontakt();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kontakt->upravitSpravu(
        (int)$_POST['id'],
        $_POST['meno'],
        $_POST['email'],
        $_POST['sprava']
    );
    header('Location: dashboard.php'); exit;
}

$id = (int)$_GET['id'];
$spravy = $kontakt->getSpravy();
$sprava = null;
foreach ($spravy as $s) { if ($s['ID'] === $id) { $sprava = $s; break; } }
if (!$sprava) { header('Location: dashboard.php'); exit; }
?>
<!DOCTYPE html>
<html lang="sk">
<head><meta charset="UTF-8"><title>Upraviť správu</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white p-4">
  <h2 class="mb-4">Upraviť správu</h2>
  <form method="POST" style="max-width:500px">
    <input type="hidden" name="id" value="<?= $sprava['ID'] ?>">
    <div class="mb-3">
      <label>Meno</label>
      <input type="text" name="meno" class="form-control" value="<?= htmlspecialchars($sprava['meno']) ?>" required>
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($sprava['email']) ?>" required>
    </div>
    <div class="mb-3">
      <label>Správa</label>
      <textarea name="sprava" class="form-control" rows="4" required><?= htmlspecialchars($sprava['sprava']) ?></textarea>
    </div>
    <button type="submit" class="btn btn-success">Uložiť</button>
    <a href="dashboard.php" class="btn btn-secondary">Späť</a>
  </form>
</body>
</html>