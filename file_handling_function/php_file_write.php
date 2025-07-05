<?php

// Open the file in read mode
$file = fopen("store-data_file.txt", "r"); 

if ($file) {
    echo "File opened successfully!";
    fclose($file); // Close the file
} else {
    echo "Failed to open the file.";
}

?>