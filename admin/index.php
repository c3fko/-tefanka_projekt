<?php
session_start();

require_once('../classes/Admin.php');
use admin\Admin;

if (isset($_SESSION['admin'])) {
    header('Location: dashboard.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $admin = new Admin();
    if ($admin->prihlasit($_POST['heslo'])) {
        $_SESSION['admin'] = true;
        header('Location: dashboard.php');
        exit;
    } else {
        $chyba = "Nesprávne heslo!";
    }
}
?>
<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <title>Admin — prihlásenie</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white d-flex justify-content-center align-items-center" style="min-height:100vh">
  <div class="card bg-secondary p-4" style="min-width:320px">
    <h4 class="text-center mb-3">Admin prihlásenie</h4>
    <?php if (!empty($chyba)): ?>
      <div class="alert alert-danger"><?= htmlspecialchars($chyba) ?></div>
    <?php endif; ?>
    <form method="POST">
      <input type="password" name="heslo" class="form-control mb-3" placeholder="Heslo">
      <button type="submit" class="btn btn-dark w-100">Prihlásiť sa</button>
    </form>
  </div>
</body>
</html>