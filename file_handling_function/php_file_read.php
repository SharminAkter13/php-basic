<?php

$file = fopen("data_file.txt", "r");
$store = fread($file, filesize("data_file.txt"));

echo $store;
fclose($file);

?>