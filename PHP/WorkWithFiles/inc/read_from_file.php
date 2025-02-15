<?php
$filename = '../files/file.txt';
$file = fopen($filename, 'r');
echo '<pre>';
var_dump($file);
echo '</pre>';
echo fread($file, filesize($filename));
echo 'Size: ' . filesize($filename);
fclose($file);
?>