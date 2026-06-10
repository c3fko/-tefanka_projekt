<?php
namespace formular;
require_once(dirname(dirname(__FILE__)) . '/classes/databases.php');

class Kontakt extends \Database {

    private $conn;

    public function __construct() {
        parent::__construct();
        $this->conn = $this->getConnection();
    }

    public function ulozitSpravu(string $meno, string $email, string $sprava): bool {
        $sql = "INSERT INTO formular (meno, email, sprava) VALUES (:meno, :email, :sprava)";
        $statement = $this->conn->prepare($sql);
        return $statement->execute([
            ':meno'   => $meno,
            ':email'  => $email,
            ':sprava' => $sprava
        ]);
    }

    public function getSpravy(): array {
        $statement = $this->conn->query("SELECT * FROM formular ORDER BY id DESC");
        return $statement ? $statement->fetchAll(\PDO::FETCH_ASSOC) : [];
    }

    public function upravitSpravu(int $id, string $meno, string $email, string $sprava): bool {
        $sql = "UPDATE formular SET meno=:meno, email=:email, sprava=:sprava WHERE id=:id";
        $statement = $this->conn->prepare($sql);
        return $statement->execute([':meno'=>$meno, ':email'=>$email, ':sprava'=>$sprava, ':id'=>$id]);
    }

    public function zmazatSpravu(int $id): bool {
        $statement = $this->conn->prepare("DELETE FROM formular WHERE id = :id");
        return $statement->execute([':id' => $id]);
    }
}