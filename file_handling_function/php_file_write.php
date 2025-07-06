<?php

// Open the file in read mode
$file = fopen("data_file.txt", "w"); 

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
    $text3 = "Before you can read or write to a file, you need to open it using the fopen() function, which returns a file pointer resource. Once you're done working with the file, you should close it using fclose() to free up resources..\n";
    fwrite($file, $text3);
     $text4 = "hello world.\n";
    fwrite($file, $text4);


    fclose($file); // Close the file
} else {
    echo "Failed to open the file.";
}

// $store = fopen("")
?>