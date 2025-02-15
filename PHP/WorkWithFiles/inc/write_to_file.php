<?php
$filename = '../files/WriteToFile.txt';
$file = fopen('../files/WriteToFile.txt', 'w');
fwrite($file,'Hello files from PHP!\nThis is a write message');
echo 'File size: ' . filesize($filename) . ' Bytes';
fclose($file);
?>