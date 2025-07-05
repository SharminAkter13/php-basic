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
?>