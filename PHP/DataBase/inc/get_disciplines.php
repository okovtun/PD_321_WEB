<?php
require_once __DIR__ . '/connection.php';
require_once __DIR__ . '/format_table.php';

$query = "SELECT * FROM Disciplines";
$result = sqlsrv_query($connection, $query);

format_table($result);

sqlsrv_close($connection);
?>