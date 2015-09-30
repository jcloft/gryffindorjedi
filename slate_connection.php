<?php
$serverName = "tcp:slateproject.database.windows.net, 1433";
$connectionOptions = array("Database" => "slate", 
                           "UID" => "jedi@slateproject",
                           "PWD" => "4Gryffindor!");
$conn = sqlsrv_connect($serverName, $connectionOptions);
 
if($conn){
  echo "connected";
  sqlsrv_query($conn,"INSERT INTO slate (username, password_hash, pwsalt, salt) VALUES ('caleb', 'testhash', 'testpwsalt', 100)");
  echo "inserted";
}
?>
