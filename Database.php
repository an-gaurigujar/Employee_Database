<?php
class Database {
    private $servername = "localhost";
    private $username = "phpmyadmin";
    private $password = "admin123"; 
    private $dbname = "company";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Close the connection when no longer needed
    public function close() {
        $this->conn->close();
    }
}
?>
