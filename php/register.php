<?php
// Connect to your MySQL database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve POST data
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Perform validation and insert data into the database
if (!empty($username) && !empty($password)) {
    // You should perform more robust validation and hashing of the password in a real-world scenario
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        echo 'Signup successful';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
} else {
    echo 'Invalid username or password';
}

$conn->close();
?>
