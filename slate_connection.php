<?php
$serverName = "tcp:slateproject.database.windows.net, 1433";
$connectionOptions = array("Database" => "slate", 
                           "UID" => "jedi@slateproject",
                           "PWD" => "4Gryffindor!");
$conn = sqlsrv_connect($serverName, $connectionOptions);
 
if($conn === false)
{
    die(print_r(sqlsrv_errors(), true));
}
else
{
  echo "Finally fucking connected."
}
?>
