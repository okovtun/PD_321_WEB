<?php
$username = $_POST['name'];
echo "<h1>Бобро пожаловать $username, спасибо за регистрацию </h1>";
echo '<pre>';
echo '<hr>';
var_dump($_POST['name']);
var_dump($_POST['email']);
echo '<hr>';
print_r($GLOBALS);
echo '</pre>';
//filter_var();
//filter_input();
?>