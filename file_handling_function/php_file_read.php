<?php

$file = fopen("store-data_file.txt", "r");
$store = fread($file, filesize("store-data_file.txt"));

echo $store;
fclose($file);

?>