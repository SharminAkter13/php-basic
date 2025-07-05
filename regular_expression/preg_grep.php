<?php
// The preg_grep() function filters elements of an array using a regular expression (pattern matching).
// preg_grep(string $pattern, array $array, int $flags = 0): array


$items = ["apple", "banana", "grape", "orange", "Guava"];

$result = preg_grep("/^g/i", $items);

print_r($result);

?>