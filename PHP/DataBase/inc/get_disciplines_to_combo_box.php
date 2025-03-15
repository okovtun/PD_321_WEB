<?php

$server_name		= "DESKTOP-0TCDSR6\SQLEXPRESS";
$connection_info = array("UID" => "PHP", "PWD" => "111", "Database" => "PD_212", "CharacterSet" => "UTF-8");

$connection = sqlsrv_connect($server_name, $connection_info);

$query = "SELECT discipline_id, discipline_name FROM disciplines";
$result = sqlsrv_query($connection, $query);

while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
	echo "<option value=\"{$row["discipline_id"]}\">";
	echo $row["discipline_name"];
	echo '</option>';
}

sqlsrv_close($connection);

?>