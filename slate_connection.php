<?php
$servername = "slateproject.database.windows.net";
$username = "jedi";
$password = "4Gryffindor!";

try {
    $conn = new PDO("mysql:host=$servername;dbname=slate", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
