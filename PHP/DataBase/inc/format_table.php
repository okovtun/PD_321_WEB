<?php

function format_table($result)
{
	//echo '<pre>';
	//var_dump($result);
	//print_r($result);
	//echo '</pre>';
	while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
		echo "<tr>";
		echo '<pre>';
		//print_r($row);
		//echo explode('_', array_keys($row)[0])[0];
		echo '</pre>';
		foreach ($row as $col) {
			echo '<td>';
			echo $col;
			echo '</td>';
		}
		echo '<td>';
		$record = explode('_', array_keys($row)[0])[0];
		//$filename = $record . '.php';
		$id = $record . '_id';
		//echo '<pre>';
		//echo $id;
		//echo '</pre>';
		echo "<a href=\"{$record}.php?id={$row[$id]}\">Подробно</a>";
		echo '</td>';
		echo "</tr>";
	}
}

?>