<?php
$config = require_once __DIR__ . '/../config/app.php';
$recipient = $config['mail']['recipient'];

echo '<pre>';
print_r($_POST);
echo '</pre>';

$contact_name = $_POST['nickname'];
$contact_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';
$headers[] = "To: {$recipient}";
$headers[] = "From:{$contact_email}";
$header = implode('\r\n', $headers);

if (mail('poltavastep2018@gmail.com', $subject, $message, $header))
	echo 'Message sent';
?>