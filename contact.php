<?php
// Database configuration
$servername = "localhost";
$username = "sheff";
$password = "@sheffalli01";
$dbname = "contact";

// Create connection
$conn = new mysqli($localhost, $root, $password , $contact);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$NAME = $_POST['name'];
$EMAIL= $_POST['email'];
$MESSAGE = $_POST['message'];

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO contacts (NAME, EMAIL, MESSAGE) VALUES (?, ?, ?)");


// Execute the statement
if ($stmt->execute() === TRUE) {
    echo "Contact information stored successfully!";
} else {
    echo "Error storing contact information: " . $conn->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>
