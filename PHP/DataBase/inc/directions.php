<?php
phpinfo();
sqlsrv_configure("LogSubsystems", SQLSRV_LOG_SYSTEM_CONN);

$server_name = "DESKTOP-0TCDSR6\SQLEXPRESS";
$connection_info = array("Database" => "PD_212", "UID"=>"PHP", "PWD"=>"111", "CharacterSet"=>"UTF-8");
//$connection_info = array("Database" => "PD_212", "UID"=>"DESKTOP-0TCDSR6\User");

$connection = sqlsrv_connect($server_name, $connection_info);

var_dump($connection);

//$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//$query = "SELECT
//das.name AS [Name]
//FROM
//sys.database_audit_specifications AS das
//WHERE
//(das.name=@_msparam_0)";

$query = "SELECT * FROM Directions;";
$results = sqlsrv_query($connection, $query);

//$results = $connection->query($query); //MySQL

//if ($results->num_rows > 0) 
//{
$row;
echo '<table>';
echo '<tr>';
echo '<th>';
echo 'ID';
echo '</th>';
echo '<th>';
echo 'Направление обучения:';
echo '</th>';

echo '</tr>';
	while ($row = sqlsrv_fetch_array($results, SQLSRV_FETCH_ASSOC)) {
		//echo "direction_id:{$row["direction_id"]} - direction_name:{$row["direction_name"]};<br>";
	echo '<tr>';
	echo '<td>';
	echo $row["direction_id"];
	echo '</td>';
	echo '<td>';
	echo $row["direction_name"];
	echo '</td>';
	echo '<td>';
	echo '<pre>';
	var_dump($row);
	print_r($row);
	echo '</pre>';
	echo '</td>';

	echo '</tr>';
	}
echo '</table>';

//}

echo '<pre>';
var_dump($row);
print_r($row);
echo '</pre>';

echo '<pre>';
var_dump($results);
print_r($results);
echo '</pre>';

sqlsrv_close($connection);
phpinfo();

?>