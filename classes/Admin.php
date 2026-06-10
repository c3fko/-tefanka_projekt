<?php
namespace admin;
require_once(dirname(dirname(__FILE__)) . '/classes/databases.php');

class Admin extends \Database {
    private $conn;

    public function __construct() {
        parent::__construct();
        $this->conn = $this->getConnection();
    }

    public function prihlasit(string $heslo): bool {
        $stmt = $this->conn->prepare("SELECT heslo FROM admin WHERE id = 1");
        $stmt->execute();
        $row = $stmt->fetch();
        return $row && password_verify($heslo, $row['heslo']);
    }
}