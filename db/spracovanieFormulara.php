<?php

require_once('../classes/kontakt.php');
use formular\Kontakt;

$meno = $_POST['meno'];
$email = $_POST['email'];
$sprava = $_POST['sprava'];

// Overenie údajov
if (empty($meno) || empty($email) || empty($sprava)) {
    die('Chyba: Všetky polia sú povinné!');
}

// Uloženie správy do databázy
$kontakt = new Kontakt();
$ulozene = $kontakt->ulozitSpravu($meno, $email, $sprava);

if ($ulozene) {
    header('Location: http://localhost/štefanka_projekt/thankyoupage.php');
} else {
    die('Chyba pri odosielaní správy do databázy!');
    http_response_code(404);
}