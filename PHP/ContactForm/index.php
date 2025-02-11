<?php

session_start();

$inputs = [];
$errors = [];



require_once __DIR__ . '/inc/header.php';

//require_once __DIR__ . '/inc/login.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	if (isset($_SESSION['message'])) {
		$message = $_SESSION['message'];
		unset($_SESSION['message']);
	} elseif (isset($_SESSION['inputs']) && isset($_SESSION['errors'])) {
		$inputs = $_SESSION['inputs'];
		$errors = $_SESSION['errors'];
	}
	require_once __DIR__ . '/inc/get.php';
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	require_once __DIR__ . '/inc/post.php';

	if (!$errors) {
		require_once __DIR__ . '/inc/mail.php';
		$_SESSION['message'] = 'Your message has been send';
	} else {
		$_SESSION['erroes'] = $errors;
		$_SESSION['inputs'] = $inputs;
	}

	exit;
}
echo '<pre>';
print_r($_SESSION);
if(isset($_SESSION['errors']))print_r($_SESSION['errors']);
if(isset($_SESSION['inputs']))print_r($_SESSION['inputs']);
echo '</pre>';

require_once __DIR__ . '/inc/footer.php';

?>