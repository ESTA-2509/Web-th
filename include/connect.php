<?php
	// PHP Data Objects(PDO) Sample Code:
try {
    $link = new PDO("sqlsrv:server = tcp:dienthoai.database.windows.net,1433; Database = dienthoai", "gr0062", "Hung*2509");
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "gr0062", "pwd" => "Hung*2509", "Database" => "dienthoai", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:dienthoai.database.windows.net,1433";
$link = sqlsrv_connect($serverName, $connectionInfo);
	$link -> set_charset("utf8");
?>
