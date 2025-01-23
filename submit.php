<?php

$servername = "localhost";
$username = "phpmyadmin";
$password = "admin123";
$dbname = "company";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];

    $sql = "INSERT INTO employee (name, email, birthdate) VALUES ('$name', '$email', '$birthdate')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='success-message'>Employee added successfully!</div>";
    } else {
        echo "<div class='error-message'>Error: " . $conn->error . "</div>";
    }
}
$sql = "SELECT name, email, birthdate, TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) AS age FROM employee";
$result = $conn->query($sql);

echo "<div class='container'>";
echo "<h2>Employee List</h2>";

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Birthdate</th>
                <th>Age</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['birthdate'] . "</td>
                <td>" . $row['age'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No employee data found.</p>";
}

$conn->close();
echo "</div>";
?>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    table, th, td {
        border: 1px solid #ddd;
    }
    th, td {
        padding: 12px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    .success-message {
        color: green;
        font-size: 18px;
        margin-bottom: 20px;
    }
    .error-message {
        color: red;
        font-size: 18px;
        margin-bottom: 20px;
    }
</style>
