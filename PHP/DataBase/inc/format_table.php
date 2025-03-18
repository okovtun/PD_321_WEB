<?php

function format_table($result)
{
	while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
		echo '<tr>';
		//echo '<pre>';
		//print_r($row);
		//echo '</pre>';
		foreach ($row as $col) {
			echo '<td>';
			echo $col;
			echo '</td>';
		}
		echo '</tr>';
	}
}

?>