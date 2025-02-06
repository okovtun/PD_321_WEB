<form action="index.php" method="post">
	<h1>Ваш любимый цвет:</h1>
	<?php
		$keys = array_keys(COLORS);
		$values = array_values(COLORS);
	echo '<pre>';
		print_r($keys);
		print_r($values);
	echo '</pre>';
	?>
	<select name="color" id="color">
		<option value="" disabled selected>--- Choose color ---</option>
		<!--<option value="black">		Черный	</option>
		<option value="red">		Красный	</option>
		<option value="green">		Зеленый	</option>
		<option value="blue">		Синий	</option>
		<option value="white">		Белый	</option>-->
		<?php
		
		for($i = 0; $i < count(COLORS); $i++)
			echo "<option value=\"$keys[$i]\">$values[$i]</option>"
		?>
	</select>
	<input type="submit" value="Submoit" />
</form>