<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: index.php'); exit;
}

require_once('../classes/kontakt.php');
use formular\Kontakt;

$kontakt = new Kontakt();

if (isset($_GET['delete'])) {
    $kontakt->zmazatSpravu((int)$_GET['delete']);
    header('Location: dashboard.php'); exit;
}

$spravy = $kontakt->getSpravy();
?>
<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8"><title>Admin — správy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white p-4">
  <div class="d-flex justify-content-between mb-4">
    <h2>Správy z kontaktného formulára</h2>
    <a href="logout.php" class="btn btn-outline-light">Odhlásiť sa</a>
  </div>
  <table class="table table-dark table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Meno</th>
        <th>Email</th>
        <th>Správa</th>
        <th>Akcie</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($spravy as $s): ?>
      <tr>
        <td><?= $s['ID'] ?></td>
        <td><?= htmlspecialchars($s['meno']) ?></td>
        <td><?= htmlspecialchars($s['email']) ?></td>
        <td><?= htmlspecialchars($s['sprava']) ?></td>
        <td>
          <a href="edit.php?id=<?= $s['ID'] ?>" class="btn btn-warning btn-sm">Upraviť</a>
          <a href="dashboard.php?delete=<?= $s['ID'] ?>" onclick="return confirm('Naozaj zmazať?')" class="btn btn-danger btn-sm">Zmazať</a>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>