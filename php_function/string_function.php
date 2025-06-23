<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>
<body>
    <h4>String Functions</h4>
<?php
// PHP String Functions:
// strlen(string): Returns the length of a string.
// substr(string, start, length): Returns a part of a string.
// strtoupper(string): Converts a string to uppercase.
// str_replace('search','replace','variable'): Replaces all occurrences of the search string with the replacement string.
// str_word_count(string): Counts the number of words in a string.

echo strlen("Breakfast");
echo "<br>";

function food(){
    return strlen("Burger");
}
echo food();
echo "<br>";

function foods_example(){ 
    // Example of correct substr usage: getting "urg" from "Burger"
    return substr("Burger", 1, 4);
}
echo foods_example();
echo "<br>";

function f(){
    return strtoupper("Burger");
}
echo f();
echo "<br>";

function g(){
    $v = "I love Burger";
    return str_replace("Burger","Pizza",$v);
}
echo g();
echo "<br>";

function h(){
    return str_word_count("Burger is my favourit food");
}
echo h();
echo "<br>";

function h1(){
    return strlen("Burger is my favourit food");
}
echo h1();
echo "<br>";
?>
</body>
</html>