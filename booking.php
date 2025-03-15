<?php
// Database connection details
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'hotels';

// Create a database connection
$conn = new mysqli('localhost', 'root', '', 'hotels');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
$name = $_POST['name'];
$email = $_POST['email'];
$check_in_date = $_POST['check_in_date'];
$check_out_date = $_POST['check_out_date'];
$mobilenumber = $_POST['$mobilenumber'];
$room_type = $_POST['room_type'];

// Insert data into the database
$sql = "INSERT INTO bookings ('name', 'email', 'check_in_date', 'check_out_date', 'mobilenumber', 'room_type') VALUES ('$name', '$email', '$check_in_date', '$check_out_date', '$mobilenumber', '$room_type')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
