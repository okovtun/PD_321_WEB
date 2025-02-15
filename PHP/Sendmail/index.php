<?php
//SMTP - Simple Mail Transfer Protocol (TCP port 25)

$headers = 'From: batumivice@yandex.ru' . "\r\n" .
	'Reply-To: batumivice@yandex.ru' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

echo mail('kovtun_ol@t.top-academy.ru', 'TestMessage', 'This is the test message from PHP', $headers);
?>

<?php
//$to = 'kovtun_ol@t.top-academy.ru';
//$subject = 'Privet iz PHP';
//$message = 'Это тестовое сообщение из PHP';
//$headers = 'From: <batumivice@yandex.ru>' . "\r\n" .
//	'Reply-To: <batumivice@yandex.ru>' . "\r\n" .
//	'X-Mailer: PHP/' . phpversion();
//echo mail($to, $subject, $message, $headers);

?>