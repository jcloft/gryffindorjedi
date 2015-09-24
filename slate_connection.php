  $serverName = "tcp:slateproject.database.windows.net,1433";
   $userName = 'jedi';
   $userPassword = '4Gryffindor!';
   $dbName = "slate";
   $table = "slate";

   $connectionInfo = array(UID"=>$userName, "PWD"=>$userPassword, "MultipleActiveResultSets"=>true);

   sqlsrv_configure('WarningsReturnAsErrors', 0);
   $conn = sqlsrv_connect( $serverName, $connectionInfo);
   if($conn === false)
   {
     FatalError("Failed to connect...");
   }
