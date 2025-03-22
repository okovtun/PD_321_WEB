<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
	<link rel="stylesheet" href="../css/style.css">
    <title></title>
</head>
<body>
	<h1>Дисциплины</h1>
	<table>
		<thead>
		<tr>
			<th>ID</td>
			<th>Название</td>
			<th>Количество занятий</td>
			<th>Подробно</th>
		</th>
		</thead>
		<tbody id="table-disciplines">
			<?php require_once __DIR__ . '/get_disciplines.php'
			?>
		</tbody>
	</table>
</body>
</html>