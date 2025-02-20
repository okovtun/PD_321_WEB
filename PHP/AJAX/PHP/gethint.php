<?php
$names[] = 'Alex';
$names[] = 'Max';
$names[] = 'Artem';
$names[] = 'Kirsan';
$names[] = 'Sagid';
$names[] = 'Andrew';

echo '<pre>';
print_r($_REQUEST);
$query = $_REQUEST['q'];
$hint = "";
echo '</pre>';

if ($query !== "") {
	$query = strtolower($query);
	//echo $query;
	foreach ($names as $name) {
		//if (stristr($name, substr($name, 0, strlen($name))) !== false) {
		if (stristr($name, $query) !== false) {
			if($hint === "")$hint = $name;
			else $hint .= ", $name";
		}
	}
}
echo $hint;
?>