  $serverName = "tcp:slateproject.database.windows.net,1433";
   $userName = 'jedi@slateproject.database.windows.net';
   $userPassword = '4Gryffindor!';
   $dbName = "slate";

   $connectionInfo = array("Database"=>$dbName, UID"=>$userName, "PWD"=>$userPassword, "MultipleActiveResultSets"=>true);

   sqlsrv_configure('WarningsReturnAsErrors', 0);
   $conn = sqlsrv_connect( $serverName, $connectionInfo);
   if($conn === false)
   {
     FatalError("Failed to connect...");
   }
