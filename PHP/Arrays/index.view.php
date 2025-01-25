<DOCTYPE HTML>
<lang="ru">
<header>
	<meta encoding="UTF-8">
	<title><?= $title; ?></title>
</header>
<body>
	<h1><?= $title; ?></h1>
	<!--
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
	array_push(array, value);	//Добавляет одно или несколько значений в конец массива
	array_pop();	//Удаляет элемент с конца массива
	array_unshift(array, value);//Добавляет одно или несколько значений в начало массива
	array_shift();	//Удаляет элемент с начала массива

	vector
	deque
	
	array_keys(array);		//Получает все ключи массива
	array_key_exists(key, array);	//Проверяет наличие ключа в массиве
	in_array(value, array);			//Проверяет наличие значения в массиве

	array_merge();
	array_reverse();
	Spread operator	...

	
	</pre>
	-->
	<!--
	<?php
		array_unshift($array1, 2);
		array_unshift($array1, 1);
		$array1[] = 340;
		array_push($array1, 550);
		print_array($array1);
		$keys = array_keys($array1);
		print_array($keys);
		echo array_key_exists(50, $array1);
		echo in_array(13.21, $array1);

		array_pop($array1);
		array_pop($array1);
		array_shift($array1);
		array_shift($array1);
		print_array($array1);
		echo '<hr>';
		$array0 = array_merge($array1, $array2);
		print_array($array1);
		print_array($array2);
		print_array($array0);
		echo '<hr>';
		$array_spread = [...$array, ...$array0];
		print_array($array_spread);
		echo '<hr>';
		echo '<h3>Arrays and variables</h3>';
		//$Mercury = $distance_to_sun['Mercury'];
		//$Venus = $distance_to_sun['Venus'];
		//$Earth = $distance_to_sun['Earth'];
		
		list
		(
			'Mercury'	=> $Mercury, 
			'Venus'		=> $Venus, 
			'Earth'		=> $Earth
		) = $distance_to_sun;
		echo "$Mercury<br>";
		echo "$Venus<br>";
		echo "$Earth<br>";

		[$zero, $first, $second, $third] = $array1;
		echo "$zero<br>";
		echo "$first<br>";
		echo "$second<br>";
		echo "$third<br>";

		[
			'Mars'		=> $Mars,
			'Jupiter'	=> $Jupiter
		] = $distance_to_sun;

		echo "$Mars<br>";
		echo "$Jupiter<br>";

		[,,,$var1, $var2] = $array1;
		echo "$var1<br>";
		echo "$var2<br>";
	?>
	-->

	<!--
	/////////////////////////////////////////////
	//					Функции сортировки:
	sort();		//Сортирует массив в порядке возрастания
	rsort();	//Сортирует массив в порядке убываения
	ksort();	//Сортирует ключи ассоциативного массива
	-->

	<?php
	rsort($array);
	print_array($array);
	?>
</body>