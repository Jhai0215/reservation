<?php

 'SELECT * FROM reservation';
// Database connection parameters
$host = 'localhost'; // Change if your database is hosted elsewhere
$dbname = 'final'; // Replace with your database name
$username = 'root'; // Replace with your database username
$password = 'jhairamae0215'; // Replace with your database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize form data
        $fullname = htmlspecialchars($_POST['fullname']);
        $phonenumber = htmlspecialchars($_POST['phone number']);
        $email = htmlspecialchars($_POST['email']);
        $date = $_POST['date'];
        $time = $_POST['time'];
        $branch = htmlspecialchars($_POST['branch']);
        $tables = (int)$_POST['tables'];
        $persons = (int)$_POST['persons'];
        $reservation = htmlspecialchars($_POST['reservation']);

        // Prepare the SQL statement
        $stmt = $pdo->prepare("INSERT INTO `reservations` (fullname, phonenumber, email, date, time, branch, tables, persons, reservation) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        // Execute the statement with the form data
        $stmt->execute([$fullname, $phonenumber, $email, $date, $time, $branch, $tables, $persons, $venue_choice]);

        // Success message
        echo "Reservation successfully booked!";
    }
} catch (PDOException $e) {
    // Handle any error
    echo "Connection failed: " . $e->getMessage();
}
?>