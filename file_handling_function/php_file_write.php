<?php

// Open the file in read mode
$file = fopen("store-data_file.txt", "w"); 

if ($file) {
    echo "File opened successfully!";
    $text = "Hello Student,\n";
    fwrite($file, $text);
    $text1 = "Today we are learning FILE HANDLING.\n";
    fwrite($file, $text1);
    $text2 = "For this we have to know what it is.\n";
    fwrite($file, $text2);
    $text3 = "In PHP, File handling is the process of interacting with files on the server, such as reading files, writing to a file, creating new files, or deleting existing ones.\n";
    fwrite($file, $text3);
    fclose($file); // Close the file
} else {
    echo "Failed to open the file.";
}

// $store = fopen("")
?>