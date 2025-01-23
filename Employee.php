<?php
class Employee {
    private $conn;

    // Constructor to initialize Database object
    public function __construct($db) {
        $this->conn = $db->conn;
    }

    // Method to insert a new employee into the database
    public function addEmployee($name, $email, $birthdate) {
        $stmt = $this->conn->prepare("INSERT INTO employee (name, email, birthdate) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $birthdate);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Method to get all employees and calculate age
    public function getEmployees() {
        $sql = "SELECT name, email, birthdate, TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) AS age FROM employee";
        $result = $this->conn->query($sql);
        return $result;
    }
}
?>
