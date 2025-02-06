<?PHP
echo setcookie('Test1', 'Test cookie', 3600);
echo setcookie('Test2', 'Test cookie 2', 3600);
var_dump($_COOKIE);
print_r($_COOKIE);

?>