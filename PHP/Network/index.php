<?php

require_once 'functions.php';

$filenames = get_filenames(__DIR__ . '/files/201 RAW.txt');


$IPs = [];
$MACs = [];

read_addresses_from_file($filenames['source'], $IPs, $MACs);
//read_addresses_from_file(__DIR__ . '/files/201 RAW.txt', $IPs, $MACs);

echo '<pre>';
print_r($filenames);
print_r($IPs);
print_r($MACs);
echo '</pre>';

write_addresses_to_file($filenames['WAL'], $IPs, $MACs);
//write_addresses_to_file(__DIR__ . '/files/201.WAL', $IPs, $MACs);
print_table_from_file($filenames['WAL']);
//print_table_from_file(__DIR__ . '/files/201.WAL');

?>