<?php
$server_name = "DESKTOP-0TCDSR6\SQLEXPRESS";
$connection_info = array("UID"=>"PHP", "PWD"=>"111", "Database"=>"PD_212", "CharacterSet"=>"UTF-8");
$connection = sqlsrv_connect($server_name, $connection_info);

//var_dump($connection);	
?>