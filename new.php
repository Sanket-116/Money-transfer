<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$db = "Login-info";

// Create a connection
$conn = new mysqli($servername, $username, $password, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted username and password
    $uname = $_POST["name"];
    $password = $_POST["pass"];

    // Insert the login information into the database
    $sql = "INSERT INTO info (user_name, pas) VALUES ('$uname', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
