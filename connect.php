<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "Login-info"; 


$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo " ";



?>
