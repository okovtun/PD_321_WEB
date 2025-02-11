<?php
if(isset($message)) :
?>

<div class="alter alter-success">
	<?= $message ?>
</div>

<?php endif ?>

<form class="login-card" action="index.php" method="post">
	<div class="login-item"><h3>Введите Ваши данные:</h3></div>
	<div class="login-item">
		<label>Name:</label>		
		<input type="string"	name="nickname"	id="nickname"		placeholder="Nickname">
		<small><?= $errors['name']?? '' ?></small>
	</div>
	<div class="login-item">
		<label>E-mail:</label>
		<input type="email"		name="email"		id="email"			placeholder="Email">	
		<small><?= $errors['email'] ?? '' ?></small>
	</div>
	<div class="login-item">
		<label>Subject:</label>		
		<input type="string"	name="subject"	id="subject"	placeholder="Subject">	
		<small><?= $errors['subject'] ?? '' ?></small>
	</div>
	<div class="login-item">
		<label>Message:</label>		
		<input type="string"	name="message"	id="message"	placeholder="message">	
		<small><?= $errors['subject'] ?? '' ?></small>
	</div>
	<div class="login-item">
		<label></label>
		<input type="submit" value="Send">
	</div>
</form>