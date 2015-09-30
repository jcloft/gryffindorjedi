<?php
// DB connection info
$host = "localhost\sqlexpress";
$user = "jedi";
$pwd = "4Gryffindor!";
$db = "registration";
try{
    $conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "create table users (
    username     VARCHAR(30) PRIMARY KEY,
    password_hash     CHAR(75) NOT NULL,
    pwsalt CHAR(75) NOT NULL,
    salt integer not null
);";
    $conn->query($sql);
}
catch(Exception $e){
    die(print_r($e));
}
echo "<h3>Table created.</h3>";
?>
