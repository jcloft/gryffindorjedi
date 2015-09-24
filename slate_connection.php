<?php
$servername = "slateproject.database.windows.net";
$username = "jedi";
$password = "4Gryffindor!";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>