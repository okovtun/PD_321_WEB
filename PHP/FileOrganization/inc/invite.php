<?php
define('ONE_WEEK', 7 * 86400);

$returning_visitor = false;
if (!isset($_COOKIE['return'])) {
    setcookie('return', '1', time() - ONE_WEEK);
} else {
    $returning_visitor = true;
}

echo $returning_visitor ? 'С возвращением' : 'Бобо пожаловать';

?>