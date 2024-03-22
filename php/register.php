<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'login');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$stmt = $mysqli->prepare("INSERT INTO users (username, email, password) VALUES (username, email, password)");
$stmt->bind_param("sss", $username, $email, $hashed_password);
$stmt->close();
$mysqli->close();
?>
