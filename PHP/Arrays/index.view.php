<DOCTYPE HTML>
<lang="ru">
<header>
	<meta encoding="UTF-8">
	<title><?= $title; ?></title>
</header>
<body>
	<h1><?= $title; ?></h1>
	<?php
		echo '<hr>';
		for($i=0; $i<count($array1); $i++)
			echo "$array1[$i]\t";
		echo '<hr>';
	?>
	<pre><?=
		var_dump($array0);
		var_dump($array1);
		$array2['12.33'] = 8.9;
		//unset($array2[4]);
		var_dump($array2);
		//print_r($array2);
		'<hr>';
		foreach($array as $iterator)
		{
			echo "$iterator\t";
		}
		echo '<br>';
		foreach($array2 as $key => $value)
		{
			echo "array2[$key]:\t$value;\n";
			//echo "$iterator\t";
		}
	?>
	</pre>
	<hr>
	<pre>
	<?
		echo print_r($distance_to_sun,true);
	?>
	</pre>
	<hr>
	<pre><?=
		//$distance_to_sun['Earth'];
		print_r($distance_to_sun);
	?>
	</pre>
	<hr>
	<hr>
	<pre>
	<?php
		//var_dump($array2D);
		//print_r($array2D);
		foreach($array2D as $iterator)
		{
			foreach($iterator as $iterator)
			{
				echo "$iterator\t";
			}
			echo '<br>';
		}
	?>
	</pre>
	<hr>
	<hr>
	<pre>
	$array[] = value;	//Добавляет элемент в конец массива
	unset($array[key]);	//Удаление элемента из массива
	array_push();	//Добавляет одно или несколько значений в конец массива
	array_pop();	//Удаляет элемент с конца массива
	array_unshift();//Добавляет одно или несколько значений в начало массива
	array_shift();	//Удаляет элемент с начала массива

	vector
	deque
	
	array_keys();		//Получает все ключи массива
	array_key_exists();	//Проверяет наличие ключа в массиве
	in_array();			//Проверяет наличие значения в массиве

	array_merge();
	array_reverse();

	</pre>
</body>