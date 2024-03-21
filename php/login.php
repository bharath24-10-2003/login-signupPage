<?php
// Retrieve POST data
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Perform validation (you should perform more robust validation and authentication in a real-world scenario)
if ($username === 'example_username' && $password === 'example_password') {
    echo 'Login successful';
} else {
    echo 'Invalid username or password';
}
?>
