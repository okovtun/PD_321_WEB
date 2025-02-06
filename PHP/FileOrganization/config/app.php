<?php

define('TITLE', 'File organization');
//echo __FILE__;

$returning_visitor = false;
if (!isset($_COOKIE['return'])) {
    setcookie('return', '0', 0);
} else {
    $returning_visitor = true;
}
?>