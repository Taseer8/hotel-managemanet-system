<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotels";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the registration form
$username = $_POST['username'];
$email = $_POST['email'];
$mobilenumber = $_POST['$mobilenumber'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

// Insert user data into the database
$sql = "INSERT INTO users (username, email, mobilenumber, password) VALUES ('$username', '$email', '$mobilenumber', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
