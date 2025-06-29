<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NameSpaces</title>
</head>
<body>
    <<?php
    namespace my\name; // see "Defining Namespaces" section

    class MyClass {}
    function myfunction() {}
    const MYCONST = 1;

    $a = new MyClass;
    $c = new \my\name\MyClass; // see "Global Space" section

    $a = strlen('hi'); // see "Using namespaces: fallback to global
                    // function/constant" section

    $d = namespace\MYCONST; // see "namespace operator and __NAMESPACE__
                            // constant" section
    $d = __NAMESPACE__ . '\MYCONST';
    echo constant($d); // see "Namespaces and dynamic language features" section
    ?>
</body>
</html>