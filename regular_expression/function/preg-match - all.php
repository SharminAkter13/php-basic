<?php
// This function searches for all the occurrences of string pattern against the string. This function is very useful for search and replace.

//  preg_match_all( $pattern, $input, $matches, $flags, $offset )

$s ="The Rain in SPAIN Fall Minly on the Plains";
$p ="/in/i";

echo preg_match_all($p,$s);
echo "<br>";
echo "<br>";

// abc

preg_match_all("/[^el]/","preg match all element testing",$text);
preg_match_all("/[el]/","preg match all element testing",$text1);

print_r($text);
echo "<br>";
echo "<br>";
print_r($text1);



echo "<br>";
echo "<br>";

$text2= "preg match all element testing 12435479698";
$pattern ="/[0-7]/";
echo preg_match_all($pattern,$text2);

echo "<br>";
echo "<br>";

$text4= "leets eeeats leeeets geeeet going";
$pattern2 ="/e{2,4}/i";
echo preg_match_all($pattern2,$text4);


echo "<br>";
echo "<br>";

$text5= "L4a";
$pattern3 ="/^[a-zA-Z]{3,5}$/";
echo preg_match_all($pattern3,$text5);



?>