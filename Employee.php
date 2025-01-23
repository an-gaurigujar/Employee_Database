<?php
class Employee {
    private $conn;
    public function __construct($db) {
        $this->conn = $db->conn;
    }

    public function addEmployee($name, $email, $birthdate) {
        $stmt = $this->conn->prepare("INSERT INTO employee (name, email, birthdate) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $birthdate);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function getEmployees() {
        $sql = "SELECT name, email, birthdate, TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) AS age FROM employee";
        $result = $this->conn->query($sql);
        return $result;
    }
}
?>
