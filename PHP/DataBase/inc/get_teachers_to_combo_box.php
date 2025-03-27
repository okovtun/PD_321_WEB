<?php
$server_name = "DESKTOP-0TCDSR6\SQLEXPRESS";
$connection_info = array("UID" => "PHP", "PWD" => "111", "Database" => "PD_212", "CharacterSet" => "UTF-8");
$connection = sqlsrv_connect($server_name, $connection_info);
//require_once __DIR__ . '/connection.php';

$query = "SELECT teacher_id, FORMATMESSAGE(N'%s %s %s',last_name,first_name,ISNULL(middle_name,N'')) AS full_name FROM Teachers";
$result = sqlsrv_query($connection, $query);
echo '<pre>';
echo '$result:';
var_dump($result);
echo '</pre>';

while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
	echo "<option value=\"{$row['teacher_id']}\">";
	echo $row['full_name'];
	echo '</option>';
}

sqlsrv_close($connection);
?>