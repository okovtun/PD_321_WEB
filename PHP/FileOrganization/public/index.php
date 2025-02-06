<?php require_once __DIR__.'/../inc/header.php';?>
<h3><?= $returning_visitor ? 'С возвращением' : 'Бобро подаловать' ?></h3>
<h1><?=TITLE?></h1>
<h2>Cookies & Sessions</h2>
<h2>HTTP - Hypertext Transfer Protocol</h2>
<?= __FILE__ . '<br>' ?>
<pre>
<!--Directory separator:<?= DIRECTORY_SEPARATOR;?>-->

<!--dsetcookie
(
	string $name,			//Имя cookie. Нельзя исползовать символы '.' и ' ', их оббычно заменяют символом '_';
	string $value = "",		//Значение может быть любого скалярного типа (string, int, bool)
	int	$expires = 0,		//Задается в формате Timestamp. Если этот параметр = 0, cookie удаляются при закрытии браузера
	string $path = "",		//Путь на Web-сервере, по которому сохраняются cookie
	string $domain = "",	//Домен, для которого будут доступны cookie.
	bool $secure = false,	//Если true, то cookie могут передаваться только по протоколу HTTPS
	bool $httponly = false	//Если true, то cookie могут передаваться только по протоколу HTTP
):bool;
setcookie
(
	string $name,
	string $value = "",
	array $options = []
):bool;
expires, path, domain, secure, httponly, samesite: None, Lax, Strict;
$_COOKIE;
isset($_COOKIE['cookie_name']);
time()-3600;-->

</pre>
<?php require_once '../inc/footer.php';?>